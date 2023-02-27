<?php
/**
 * @package AdminOrderController
 * @author tehcvillage <support@techvill.org>
 * @contributor Sakawat Hossain Rony <[sakawat.techvill@gmail.com]>
 * @created 19-01-2022
 */
namespace App\Http\Controllers;

use App\DataTables\OrderDataTable;
use App\Exports\OrderListExport;
use Modules\Refund\Entities\RefundReason;
use Illuminate\Http\Request;
use App\Models\{Order, OrderDetail, OrderMeta, OrderNoteHistory, OrderStatus, OrderStatusHistory, Preference, Product, User};
use App\Services\Actions\OrderAction;
use App\Services\Mail\{
    UserInvoiceMailService,
    VendorInvoiceMailService
};
use Excel, Auth, DB;

class AdminOrderController extends Controller
{
    /**
     * All orders
     *
     * @param OrderDataTable $dataTable
     * @return mixed
     */
    public function index(OrderDataTable $dataTable)
    {
        $data['statuses'] = OrderStatus::getAll()->sortBy('order_by');
        $data['vendors'] = OrderDetail::select('vendor_id')->distinct()->with('vendor:id,name')->get();
        return $dataTable->render('admin.orders.index', $data);
    }

    /**
     * Order view
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function view($id)
    {
        $order = Order::where('id', $id)->first();
        if (!empty($order)) {
            $data['orderStatus'] = OrderStatus::getAll()->sortBy('order_by');
            $data['order'] = $order;
            $data['orderDetails'] = $order->orderDetails->groupBy('vendor_id');
            $data['refundReasons'] = RefundReason::where('status', 'Active')->get();
            $data['orderStatusHistories'] = OrderStatusHistory::where('order_id', $id)->whereNotNull('product_id')->orderByDesc('id')->get();
            $data['finalOrderStatus'] = OrderStatus::orderBy('order_by', 'DESC')->first()->id;
            $data['orderNotes'] = OrderNoteHistory::where(['order_id' => $id, 'user_id' => auth()->user()->id])->orderBy('id', 'desc')->get();
            $data['orderAction'] = new OrderAction;
            return view('admin.orders.view', $data);
        }
        return redirect()->back();
    }

    /**
     * change oreder status
     *
     * @param Request $request
     * @return array
     */
    public function changeStatus(Request $request)
    {
        $finalOrderStatus = Order::getFinalOrderStatus();

        if (!isset($request->data['type'])) {
            $order = Order::where('id', $request->data['order_id'])->first();
            $data['status'] = 0;
            $data['message'] = __('The :x has been successfully saved.', ['x' => __('Order')]);

            if (!empty($order)) {
                try {
                    DB::beginTransaction();
                    if ($request->data['status_id'] != $finalOrderStatus || ($request->data['status_id'] == $finalOrderStatus  && strtolower($order->payment_status) == "paid")) {

                        if ((new Order)->updateOrder(['order_status_id' => $request->data['status_id']], $order->id)) {
                            $orderDetails = OrderDetail::where('order_id', $request->data['order_id'])->get();

                            foreach ($orderDetails as $detail) {
                                if (optional($detail->refund)->status != "Completed" && $detail->is_delivery != 1 && optional($detail->orderStatus)->slug != 'cancelled') {
                                    $detailData = ['order_status_id' => $request->data['status_id']];
                                    if ($request->data['status_id'] == $finalOrderStatus) {
                                        $detailData['is_delivery'] = 1;
                                        $detailData['is_on_time'] = $detail->isInTime();
                                    }
                                    (new OrderDetail)->updateOrder($detailData, $detail->id);
                                    if (isActive('Commission')) {
                                        $order->orderCommission($detail->id, $request->data['status_id']);
                                    }

                                    $history['user_id'] = Auth::user()->id;
                                    $history['product_id'] = $detail->product_id;
                                    $history['order_id'] = $request->data['order_id'];
                                    $history['order_status_id'] = $request->data['status_id'];
                                    (new OrderStatusHistory)->store($history);
                                }
                            }

                            if ($request->data['status_id'] == $finalOrderStatus) {
                                $history = [];
                                $history['order_id'] = $order->id;
                                $history['note'] = "Delivered";
                                $history['order_status_id'] = $finalOrderStatus;
                                (new OrderStatusHistory)->store($history);
                            }

                            $data['status'] = 1;
                        } else {
                            $data['error'] = __('Something went wrong, please try again.');
                        }
                    } else {
                        $data['error'] = __("Please pay first in order to reach the final status.");
                    }

                    DB::commit();
                } catch (Exception $e) {
                    DB::rollBack();
                    $data['error'] = __('Something went wrong, please try again.');
                }
            }
        } elseif (isset($request->data['type']) && $request->data['type'] == 'detail') {
            $data['status'] = 0;

            try {
                DB::beginTransaction();
                foreach ($request->data['status_ids'] as $detailId => $statusId) {
                    $orderDetail = OrderDetail::where('id', $detailId)->first();
                    if (empty($orderDetail) || $orderDetail->is_delivery == 1) {
                        continue;
                    }
                    if ($statusId != $finalOrderStatus || ($statusId == $finalOrderStatus  && strtolower(optional($orderDetail->order)->payment_status) == "paid")) {

                        $updateData = ['order_status_id' => $statusId];
                        if ($statusId == $finalOrderStatus) {
                            $updateData['is_delivery'] = 1;
                            $updateData['is_on_time'] =  $orderDetail->isInTime();
                        }
                        (new OrderDetail)->updateOrder($updateData, $orderDetail->id);

                        $history['user_id'] = Auth::user()->id;
                        $history['order_id'] = $orderDetail->order_id;
                        $history['product_id'] = $orderDetail->product_id;
                        $history['order_status_id'] = $statusId;
                        (new OrderStatusHistory)->store($history);

                        $checkAllStatus = OrderDetail::where('order_id', $orderDetail->order_id)->whereHas("orderStatus", function ($q) {$q->where('slug', '!=', 'cancelled');})->pluck('order_status_id')->toArray();
                        $checkAllStatus = array_unique($checkAllStatus);

                        if (count($checkAllStatus) == 1) {
                            $order = Order::where('id', $orderDetail->order_id)->first();
                            if ($order->order_status_id != $checkAllStatus[0]) {
                                (new Order)->updateOrder(['order_status_id' => $checkAllStatus[0]], $orderDetail->order_id);
                                $history = [];
                                $history['order_id'] = $orderDetail->order_id;
                                $history['note'] = "System Generated";
                                $history['order_status_id'] = $statusId;
                                (new OrderStatusHistory)->store($history);
                            }
                        }

                        //commission
                        if (isActive('Commission')) {
                            (new order)->orderCommission($orderDetail->id, $statusId);
                        }

                        $data['status'] = 1;
                    } else {
                        $data['error'] = __("Please pay first in order to reach the final status.");
                    }
                }
                DB::commit();
            } catch (Exception $e) {
                DB::rollBack();
                $data['error'] = __('Something went wrong, please try again.');
            }

            if ($data['status'] == 0 && !isset($data['error'])) {
                $data['error'] = __('Something went wrong, please try again.');
            }
        }

        return $data;
    }

    /**
     * @param Request $request
     * @return array
     */
    public function update(Request $request)
    {
        if (isset($request->data['order_id'])) {
            $order = Order::where('id', $request->data['order_id'])->first();
            $data['status'] = 0;
            $data['message'] = __('The :x has been successfully saved.', ['x' => __('Order')]);
            if (!empty($order) && isset($request->data['type'])) {
                if ($request->data['type'] == 'general') {
                    $downLoadData = json_decode($request->data['download_data']);

                    if (is_array($downLoadData) && count($downLoadData) > 0) {
                        $order->downloadDataMerge($downLoadData);
                    }

                    if ((new Order)->updateOrder([
                        'order_date' => DbDateFormat($request->data['order_date']),
                        'user_id' => $request->data['user_id']
                    ], $order->id)) {
                        $data['status'] = 1;
                    }
                } elseif ($request->data['type'] == 'deliveryDate') {
                    $orderStatusId = Order::getFinalOrderStatus();
                    $history = OrderStatusHistory::where('order_id', $order->id)->where('order_status_id', $orderStatusId)->whereNull('product_id')->orderBy('id', 'DESC')->first();
                    if (!empty($history)) {
                        if ((new OrderStatusHistory)->updateOrder(['created_at' => DbDateFormat($request->data['deliveryDate'])], $history->id)) {
                            $data['status'] = 1;
                        }
                    }
                } elseif ($request->data['type'] == 'note') {
                    $user['user_id'] = auth()->user()->id;
                    $data = array_merge($request->data, $user);

                    $validator = OrderNoteHistory::storeValidation($data);
                    if ($validator->fails()) {
                        $response['status'] = 0;
                        $response['error'] = $validator->errors()->first();
                        return $response;
                    }

                    if ($response = (new OrderNoteHistory)->storeData($data)) {
                        $date = timeZoneFormatDate($response->created_at) . ' ' . timeZoneGetTime($response->created_at);
                        $data = ['status' => 1, 'date' => $date, 'note' => $response->note, 'message' => __('The :x has been successfully saved.', ['x' => __('Note')])];
                    }
                } elseif ($request->data['type'] == 'orderAction') {
                    if (isset($request->data['action_val'])) {
                        if ($request->data['action_val'] == 1) {
                            if ($emailInfo = (new UserInvoiceMailService)->send($order)) {
                                $data['status'] = 1;
                                $data['message'] = $emailInfo['message'];
                            }
                        } elseif ($request->data['action_val'] == 3) {
                            if ($emailInfo = (new VendorInvoiceMailService)->send($order)) {
                                $data['status'] = 1;
                                $data['message'] = $emailInfo['message'];
                            }
                        }
                    }
                } elseif ($request->data['type'] == 'download') {
                    return $order->revokeAccess($request);
                }
            }
            if ($data['status'] == 0) {
                $data['error'] = __('Something went wrong, please try again.');
                if (isset($request->data['action_val'])) {
                    if ($request->data['action_val'] == 1 || $request->data['action_val'] == 3) {
                        $data['error'] = __('Email can not be sent, please check email configuration or try again.');
                    }
                }
            }
        }
        return $data;
    }

    /**
     * Order destroy
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $response = $this->messageArray(__('Invalid Request'), 'fail');
        $result = $this->checkExistence($id, 'orders');
        if ($result['status'] === true) {
            $response = (new Order)->remove($id);
        } else {
            $response['message'] = $result['message'];
        }
        $this->setSessionValue($response);
        return redirect()->route('order.index');
    }

    /**
     * order list pdf
     * @return html static page
     */
    public function pdf()
    {
        $data['orders'] = Order::all();

        return printPDF(
            $data,
            'order_lists' . time() . '.pdf',
            'admin.orders.pdf',
            view('admin.orders.pdf', $data),
            'pdf'
        );
    }

    /**
     * order list csv
     * @return html static page
     */
    public function csv()
    {
        return Excel::download(new OrderListExport(), 'order_lists' . time() . '.csv');
    }

    /**
     * order invoice print
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|void
     */
    public function invoicePrint($id)
    {
        $order = Order::where('id', $id)->first();
        if (!empty($order)) {
            $data['orderStatus'] = OrderStatus::getAll()->sortBy('order_by');
            $data['order'] = $order;
            $data['logo'] = Preference::getAll()->where('field', 'company_logo')->first()->fileUrl();
            $data['orderAction'] = new OrderAction;
            $data['user'] = $order->user;
            $data['orderDetails'] = $order->orderDetails;
            $data['type'] = request()->get('type') == 'print' || request()->get('type') == 'pdf' ? request()->get('type') : 'print';
            if ($data['type'] == 'pdf') {
                return printPDF($data, $order->reference . '.pdf', 'admin.orders.invoice_print', view('admin.orders.invoice_print', $data), $data['type']);
            } else {
                return view('admin.orders.invoice_print', $data);
            }
        }
        return redirect()->route('order.index');
    }

    /**
     * grant access
     *
     * @param Request $request
     * @return int[]
     */
    public function grantAccess(Request $request)
    {
        $orderId = $request->order_id;
        $order = Order::where('id', $orderId)->first();

        if (!empty($order)) {
            return $order->grantAccess($request);
        }

        return ['status' => 0];

    }
}
