<?php
/**
 * @package OrderController
 * @author TechVillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 27-01-2022
 */
namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\OrderStoreRequest;
use App\Services\Product\AddToCartService;
use Illuminate\Http\Request;
use Modules\Gateway\Redirect\GatewayRedirect;

use Modules\Commission\Http\Models\{
    Commission, OrderCommission
};
use App\Http\Resources\Order\{
    OrderResource,
};
use App\Models\{Address,
    Country,
    Currency,
    Order,
    OrderDetail,
    OrderMeta,
    OrderStatus,
    OrderStatusHistory,
    Preference,
    Product};
use App\Services\Actions\Facades\OrderActionFacade as OrderAction;
use Cart, Auth, DB, Session;

class OrderController extends Controller
{
    /**
     * User orders
     * @param Request $request
     * @return json $data
     */
    public function index(Request $request)
    {
        $configs = $this->initialize([], $request->all());
        $order = Order::with(OrderAction::relationsWith())->where('user_id', auth()->guard('api')->user()->id);

        $reference = isset($request->invoice) ? $request->invoice : null;
        if (!empty($reference)) {
            $order->where('reference', $reference);
        }

        $date = isset($request->created_at) ? $request->created_at : null;
        if (!empty($date)) {
            $order->where('created_at', $date);
        }

        $price = isset($request->price) ? $request->price : null;
        if (!empty($price)) {
            $order->where('price', $price);
        }

        $filter = isset($request->filter) ? $request->filter : null;
        if (!empty($filter)) {
            $filterDay = ['today' => today(), 'last_week' => now()->subWeek(), 'last_month' => now()->subMonth(), 'last_year' => now()->subYear()];
            if (isset($filter) && array_key_exists($filter, $filterDay)) {
                $order->whereDate('created_at', '>=', $filterDay[$filter]);
            }
        }

        $status = isset($request->status) ? $request->status : null;
        if (!empty($status)) {
            $order->where('payment_status', $status);
        }

        $keyword = isset($request->keyword) ? $request->keyword : null;
        if (!empty($keyword)) {
            if (is_int($keyword)) {
                $order->where(function ($query) use ($keyword) {
                    $query->where('id', $keyword)
                        ->orwhere('price', 'LIKE', "%" . $keyword . "%")
                        ->orwhere('reference', 'LIKE', "%" . $keyword . "%");
                });
            } else if (strlen($keyword) >= 2) {
                $order->where(function ($query) use ($keyword) {
                    $query->where('reference', 'LIKE', "%" . $keyword . "%")
                        ->orwhere('price', 'LIKE', "%" . $keyword . "%")
                        ->orwhere('status', $keyword);
                });
            }
        }

        $order->orderBy('created_at', 'desc');

        return $this->response([
            'data' => OrderResource::collection($order->paginate($configs['rows_per_page'])),
            'pagination' => $this->toArray($order->paginate($configs['rows_per_page'])->appends($request->all()))
        ]);
    }

    /**
     * Delete wishlist
     * @param int $id
     * @return json $response
     */
    public function details($id)
    {
        $userId = auth()->guard('api')->user()->id;
        $response = $this->checkExistence($id, 'orders');

        if ($response['status']) {
            return $this->response([
                'data' => new OrderResource(Order::with(OrderAction::relationsWith())->where('id', $id)->where('user_id', $userId)->first())
            ]);
        }

        return $this->response([], 204, $response['message']);
    }

    /**
     * order store
     *
     * @param Request $request
     * @return void
     */
    public function store(OrderStoreRequest $request)
    {
        $userId = Cart::userId();

        if ($this->c_p_c()) {
            return $this->unprocessableResponse(__("This product is facing license validation issue. Please contact admin to fix the issue."));
        }
        $order = [];
        $detailData = [];
        $cartData = Cart::selectedCartCollection();
        $cartService = new AddToCartService();
        if (is_array($cartData) && count($cartData) > 0) {
            $coupon = 0;
            if (isActive('Coupon')) {
                $coupon = Cart::getCouponData();
            }
            $defaultCurrency = Currency::getDefault();

            if (isset($request->selected_tab) && $request->selected_tab == 'new') {
                $request['user_id'] = $userId;
                $request['is_default'] = isset($request->default_future) && $request->default_future == 'on' ? 1 : 0;
                $validator = Address::storeValidation($request->all());
                if ($validator->fails()) {
                    return $this->unprocessableResponse($validator->messages());
                }
                $existsAddressId = (new Address)->store($request->only('user_id', 'first_name', 'last_name', 'phone', 'address_1', 'address_2', 'state', 'country', 'city', 'zip', 'is_default', 'type_of_place', 'email'));
                $addressId = $existsAddressId;

                if (isset($request->ship_different) && $request->ship_different == 'on') {
                    $shipDiffAddress = ['country' => $request->shipping_address_country, 'state' => $request->shipping_address_state, 'city' => $request->shipping_address_city, 'post_code' => $request->shipping_address_zip];
                    $addressId = (object)$shipDiffAddress;
                }
            } elseif (isset($request->address_id) && isset($request->selected_tab) && $request->selected_tab == 'old') {
                $defAddress = Address::where('user_id', $userId)->where('id', $request->address_id)->first();
                if (!empty($defAddress)) {
                    $existsAddressId = $defAddress->id;
                    $addressId = $existsAddressId;
                } else {
                    return $this->unprocessableResponse(__('Address not found.'));
                }
            }

            $taxShipping = $cartService->getTaxShipping($addressId ?? null, 'order');
            $totalTax = $taxShipping['tax'];
            $totalShipping = $taxShipping['shipping'];
            $cartService->destroySessionAddress();
            $cartService->destroyShippingIndex();
            $orderStatus = OrderStatus::getAll()->where('slug', 'pending-payment')->first();
            $order['user_id'] = $userId;
            $order['order_date'] = DbDateFormat(date('Y-m-d'));
            $order['currency_id'] = $defaultCurrency->id;
            $order['shipping_charge'] = $totalShipping;
            $order['shipping_title'] = $taxShipping['key'] ?? null;
            $order['tax_charge'] = $totalTax;
            $order['total'] = (Cart::totalPrice('selected') + $totalShipping + $totalTax) - $coupon;
            $order['total_quantity'] = Cart::totalQuantity('selected');
            $order['paid'] = 0;
            $order['amount_received'] = 0;
            $order['other_discount_amount'] = $coupon;
            $order['order_status_id'] = $orderStatus->id;

            $preference = Preference::getAll()->pluck('value', 'field')->toArray();
            $reference = Order::getOrderReference($preference['order_prefix'] ?? null);

            $order['reference'] = $reference;

            try {
                DB::beginTransaction();
                $orderId = (new Order)->store($order);
                /* initial history add */
                $history['order_id'] = $orderId;
                $history['order_status_id'] = $orderStatus->id;
                (new OrderStatusHistory)->store($history);
                /* initial history end */
                if (!empty($orderId)) {
                    $downloadable = [];

                    foreach ($cartData as $key => $cart) {
                        $item = Product::where('id', $cart['id'])->published()->first();

                        if ($item->meta_downloadable == 1) {
                            $idCount = 1;
                            foreach ($item->meta_downloadable_files as $files) {
                                if (isset($files['url']) && !empty($files['url'])) {
                                    $url = urlSlashReplace($files['url'], ['\/', '\\']);
                                    $downloadable[] = [
                                        'id' => $idCount++,
                                        'download_limit' => !is_null($item->meta_download_limit) && $item->meta_download_limit != '' && $item->meta_download_limit != '-1' ? $item->meta_download_limit * $cart['quantity'] : $item->meta_download_limit,
                                        'download_expiry' => $item->meta_download_expiry,
                                        'link' => $url,
                                        'download_times' => 0,
                                        'is_accessible' => 1,
                                        'vendor_id' => $item->vendor_id,
                                        'name' => $item->name,
                                        'f_name' => $files['name'],
                                    ];
                                }
                            }
                        }

                        $variationMeta = null;
                        if ($cart['type'] == 'Variable Product') {
                            $variationMeta = $cart['variation_meta'];
                        }
                        /*Check Inventory & update*/
                        if (!$item->checkInventory($cart['quantity'], $item->meta_backorder, $orderStatus->slug)) {
                            return $this->unprocessableResponse([], __('Invalid Order!'));
                        }
                        /*End Inventory & update*/
                        $shipping = 0;
                        $tax = 0;
                        if (!empty($item)) {
                            $offerFlag = $item->offerCheck();
                            $tax = $offerFlag ? $item->priceWithTax('including tax', 'sale', false, true, false, $addressId) * $cart['quantity'] : $item->priceWithTax('including tax', 'regular', false, true, false, $addressId) * $cart['quantity'];

                            if (isActive('Shipping')) {
                                $shipping = $item->shipping(['qty' => $cart['quantity'], 'price' => $cart['price'], 'address' => $addressId, 'from' => 'order']);
                                if (is_array($shipping) && count($shipping) > 0) {
                                    $shipping = $shipping[($taxShipping['key'])];
                                } else {
                                    $shipping = 0;
                                }
                            }
                        }
                        $detailData[] = [
                            'product_id' => $cart['id'],
                            'parent_id' => $cart['parent_id'],
                            'order_id' => $orderId,
                            'vendor_id' => $cart['vendor_id'],
                            'shop_id' => $cart['shop_id'],
                            'product_name' => $cart['name'],
                            'price' => $cart['price'],
                            'quantity_sent' => 0,
                            'quantity' => $cart['quantity'],
                            'order_status_id' => $orderStatus->id,
                            'payloads' => $variationMeta,
                            'order_by' => $key,
                            'shipping_charge' => $shipping,
                            'tax_charge' => $tax,
                            'is_stock_reduce' => $item->isStockReduce($orderStatus->slug)
                        ];

                        if ($item->type == 'Variation') {
                            $item->parentDetail->updateCategorySalesCount();
                        } else {
                            $item->updateCategorySalesCount();
                        }
                    }
                    (new OrderDetail)->store($detailData);
                    OrderAction::store($existsAddressId, $userId, $orderId, $downloadable, $request);

                    //commission
                    $commission = Commission::getAll()->first();
                    if (!empty($commission) && $commission->is_active == 1) {
                        $orderDetails = OrderDetail::where('order_id', $orderId)->get();
                        $orderCommission = [];
                        foreach ($orderDetails as $details) {
                            if (isset($details->vendor->sell_commissions) && optional($details->vendor)->sell_commissions > 0) {
                                $orderCommission[] = [
                                    'order_details_id' => $details->id,
                                    'category_id' => null,
                                    'vendor_id' => $details->vendor_id,
                                    'amount' => $details->vendor->sell_commissions,
                                    'status' => 'Pending',
                                ];
                            } elseif ($commission->is_category_based == 1 && isset($details->productCategory->category->sell_commissions) && !empty($details->productCategory->category->sell_commissions) && $details->productCategory->category->sell_commissions > 0) {
                                $orderCommission[] = [
                                    'order_details_id' => $details->id,
                                    'category_id' => $details->productCategory->category_id,
                                    'vendor_id' => null,
                                    'amount' => $details->productCategory->category->sell_commissions,
                                    'status' => 'Pending',
                                ];
                            } else {
                                $orderCommission[] = [
                                    'order_details_id' => $details->id,
                                    'category_id' => $details->productCategory->category_id ?? null,
                                    'vendor_id' => $details->vendor_id ?? null,
                                    'amount' => $commission->amount,
                                    'status' => 'Pending',
                                ];
                            }
                        }
                        if (is_array($orderCommission) && count($orderCommission) > 0) {
                            (new OrderCommission)->store($orderCommission);
                        }
                    }

                    $latestOrder = Order::where('id', $orderId)->first();

                    //end commission
                    if (isActive('Coupon')) {
                        $coupons = Cart::getCouponData(false);
                        $couponRedem = [];
                        if (is_array($coupons) && count($coupons) > 0) {
                            foreach ($coupons as $coupon) {
                                $couponRedem[] = [
                                    'coupon_id' => $coupon['id'],
                                    'coupon_code' => $coupon['code'],
                                    'user_id' => $userId,
                                    'user_name' => $userId,
                                    'order_id' => $orderId,
                                    'order_code' => $latestOrder->reference,
                                    'discount_amount' => $coupon['calculated_discount']
                                ];
                            }
                            (new \Modules\Coupon\Http\Models\CouponRedeem)->store($couponRedem);
                        }
                    }

                    DB::commit();
                    Cart::selectedCartProductDestroy();

                    request()->query->add(['payer' => 'guest', 'to' => techEncrypt('site.orderpaid.guest')]);

                    $route = GatewayRedirect::paymentRoute($latestOrder, $latestOrder->total, $latestOrder->currency->name, $latestOrder->reference, $request);

                    return $this->successResponse([
                        'data' => new OrderResource(Order::with(OrderAction::relationsWith())->where('id', $orderId)->first()),
                        'payment_link' => $route
                    ]);
                }
            } catch (Exception $e) {
                DB::rollBack();
                return $this->unprocessableResponse([], $e->getMessage());
            }
        }

        return $this->unprocessableResponse([], __('No product found.'));
    }

    /**
     * order checkout
     *
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function checkOut()
    {
        Cart::checkCartData();
        $data['selectedTotal'] = Cart::totalPrice('selected');
        $hasCart = Cart::selectedCartCollection();
        $cartService = new AddToCartService();

        if (is_array($hasCart) && count($hasCart) > 0) {
            $taxShipping = $cartService->getTaxShipping();
            $data['addresses'] = Address::getAll();
            $data['defaultAddresses'] = Address::getAll()->where('is_default', 1)->first();
            $data['countries'] = Country::getAll();
            $data['tax'] = $taxShipping['tax'];
            $data['shipping'] = $taxShipping['shipping'];
            $data['shippingIndex'] = $cartService->getShippingIndex();

            if (isActive('Coupon')) {
                $data['coupon'] = Cart::getCouponData();
            }

            return $this->response($data);
        }

        return $this->errorResponse([]);
    }

    /**
     * Track order
     *
     * @param string $code
     * @return json
     */
    public function trackOrder($code)
    {
        if (!OrderMeta::where(['key' => 'track_code', 'value' => $code])->count()) {
            return $this->notFoundResponse([], __('Order not found.'));
        }

        return $this->response([
            'data' => new OrderResource(Order::with(OrderAction::relationsWith())
                ->join('orders_meta', 'orders.id', 'orders_meta.order_id')
                ->where(['orders_meta.key' => 'track_code', 'orders_meta.value' => $code])
                ->selectRaw('orders.*, orders_meta.value as track_code')
                ->first())
        ]);
    }

    public function c_p_c() {
		p_c_v();
		return false;
    }

    /**
     * get shipping tax from selected address
     *
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function getShippingTax(Request $request)
    {
        $response = ['status' => 0, 'message' => __('Something went wrong, please try again.')];
        $cartService = new AddToCartService();
        $address = $request->address_id ?? null;

        if (!is_null($address)) {
            $userId = Cart::userId();
            $isExists = Address::where('id', $address)->where('user_id', $userId);

            if (!$isExists->exists()) {
                $response['message'] = __('Please select correct address.');
                return $this->errorResponse([], 500, $response['message']);
            }
        }

        if (is_null($address)) {
            $address = ['country' => $request->country, 'state' => $request->state, 'city' => $request->city, 'post_code' => $request->zip];
            $address = (object)$address;
        }

        $cartService->destroyShippingIndex();
        $getTaxShipping = $cartService->getTaxShipping($address, null, true);

        if ($getTaxShipping) {
            $response = ['status' => 1, 'tax' => $getTaxShipping['tax'], 'displayTaxTotal' => $getTaxShipping['displayTaxTotal'], 'shipping' => $getTaxShipping['shipping'], 'totalPrice' => Cart::totalPrice('selected'), 'shippingIndex' => $cartService->getShippingIndex()];
        }

        if ($response['status'] == 1) {
            return $this->response(['data' => $response]);
        }

        return $this->errorResponse([], 500, $response['message']);
    }
}
