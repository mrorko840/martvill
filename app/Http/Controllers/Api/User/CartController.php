<?php
/**
 * @package CartController
 * @author TechVillage <support@techvill.org>
 * @contributor Sakawat Hossain Rony <[sakawat.techvill@gmail.com]>
 * @created 24-02-2021
 */
namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Services\Product\AddToCartService;
use App\Models\{
    Product,
};
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    private $cartService;

    public function __construct()
    {
        $this->cartService = AddToCartService::getInstance();
    }

    /**
     * cart list
     *
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return $this->response(['data' => $this->cartService->cartList()]);
    }

    /**
     * cart store
     *
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse|void
     */
    public function store(Request $request)
    {
        $validator = Product::cartStoreValidation($request->all());

        if ($validator->fails()) {
            return $this->unprocessableResponse($validator->messages());
        }

        $response = $this->cartService->add($request);

        if ($response['status'] == 1) {
            return $this->response(['data' => $response]);
        }

        return $this->errorResponse([], 500, $response['message']);
    }

    /**
     * delete from cart
     *
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse|void
     */
    public function destroy(Request $request)
    {
        $validator = Product::cartIndexValidation($request->all());

        if ($validator->fails()) {
            return $this->unprocessableResponse($validator->messages());
        }

        $response = $this->cartService->delete($request);

        if ($response['status'] == 1) {
            return $this->response(['data' => $response]);
        }

        return $this->errorResponse([], 500, $response['message']);
    }

    /**
     * delete all data from cart list
     *
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse|void
     */
    public function destroyAll(Request $request)
    {
        $response = $this->cartService->deleteAll($request);

        if ($response['status'] == 1) {
            return $this->response(['data' => $response]);
        }

        return $this->errorResponse([], 500, $response['message']);
    }

    /**
     * reduce quantity
     *
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse|void
     */
    public function reduceQuantity(Request $request)
    {
        $validator = Product::cartIndexValidation($request->all());

        if ($validator->fails()) {
            return $this->unprocessableResponse($validator->messages());
        }

        $response = $this->cartService->decrement($request);

        if ($response['status'] == 1) {
            return $this->response(['data' => $response]);
        }

        return $this->errorResponse([], 500, $response['message']);
    }

    /**
     * check coupon
     *
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse|void
     */
    public function checkCoupon(Request $request)
    {
        $response = $this->cartService->checkCoupon($request);

        if ($response['status'] == 1) {
            return $this->response(['data' => $response]);
        }

        return $this->errorResponse([], 500, $response['message']);
    }

    /**
     * destroy selected
     *
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse|void
     */
    public function destroySelected(Request $request)
    {
        $request['id'] = json_decode($request->id);
        $validator = Product::cartSelectedValidation($request->all());

        if ($validator->fails()) {
            return $this->unprocessableResponse($validator->messages());
        }

        $request['code'] = $request->id;
        $response = $this->cartService->deleteSelected($request);

        if ($response['status'] == 1) {
            return $this->response(['data' => $response]);
        }

        return $this->errorResponse([], 500, $response['message']);
    }

    /**
     * store selected
     *
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse|void
     */
    public function storeSelected(Request $request)
    {
        $request['id'] = json_decode($request->id);
        $validator = Product::cartSelectedValidation($request->all());

        if ($validator->fails()) {
            return $this->unprocessableResponse($validator->messages());
        }

        $request['code'] = $request->id;
        $response = $this->cartService->addSelected($request);

        if ($response['status'] == 1) {
            return $this->response(['data' => $response]);
        }

        return $this->errorResponse([], 500, $response['message']);
    }

    /**
     * select shipping
     *
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse|void
     */
    public function selectShipping(Request $request)
    {
        $validator = Product::cartShippingIndexValidation($request->all());

        if ($validator->fails()) {
            return $this->unprocessableResponse($validator->messages());
        }

        $request['code'] = $request->shipping_index;
        $response = $this->cartService->selectShipping($request);

        if ($response['status'] == 1) {
            return $this->response(['data' => $response]);
        }

        return $this->errorResponse([], 500, $response['message']);
    }

    /**
     * delete coupon
     *
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function deleteCoupon(Request $request)
    {
        $validator = Product::couponIndexValidation($request->all());

        if ($validator->fails()) {
            return $this->unprocessableResponse($validator->messages());
        }

        $response = $this->cartService->deleteCoupon($request);

        if ($response['status'] == 1) {
            return $this->response(['data' => $response]);
        }

        return $this->errorResponse([], 500, $response['message']);
    }

    /**
     * cart store from wishList
     *
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse|void
     */
    public function addAll(Request $request)
    {
        $products = json_decode($request->product_data);
        $data = null;

        foreach ($products as $product) {
            $validator = Product::cartStoreValidation(['code' => $product->code, 'variation_id' => $product->variation_id]);
            if ($validator->fails()) {
                return $this->unprocessableResponse($validator->messages());
            }

            $response = $this->cartService->add($product);
            if ($response['status'] == 0) {
                return $this->errorResponse([], 500, $response['message']);
            }

            $data = $response;
        }

        return $this->successResponse($data, 200, __('Products added to cart successfully.'));
    }

    /**
     * get selected data
     *
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function getSelected()
    {
        $response = $this->cartService->getSelected();

        if ($response['status'] == 1) {
            return $this->response(['data' => $response]);
        }

        return $this->errorResponse([], 500, __('Something went wrong, please try again.'));
    }
}
