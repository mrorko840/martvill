<?php
/**
 * @package VendorRefundDataTable
 * @author TechVillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 18-11-2021
 */

namespace Modules\Refund\DataTables;

use App\DataTables\DataTable;
use Modules\Refund\Entities\Refund;

class VendorRefundDataTable extends DataTable
{
    /*
    * DataTable Ajax
    *
    * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\DataTables
    */
    public function ajax()
    {
        $refunds = $this->query();
        return datatables()
            ->of($refunds)

            ->addColumn('reference', function ($refunds) {
                if (!is_null(optional($refunds->orderDetail)->order)) {
                    return '<a href="' . route('vendorOrder.view', ['id' => $refunds->orderDetail->order->id]) . '">' . $refunds->orderDetail->order->reference . '</a>';
                }
                return __('Unavailable');
            })->editColumn('orderDetail.price', function ($refunds) {
                return formatNumber(optional($refunds->orderDetail)->price);
            })
            ->editColumn('shipping_method', function ($refunds) {
                return $refunds->shipping_method;
            })
            ->editColumn('refundReason.name', function ($refunds) {
                return optional($refunds->refundReason)->name;
            })
            ->editColumn('status', function ($refunds) {
                return statusBadges(lcfirst($refunds->status));
            })->addColumn('action', function ($refunds) {
                $edit = '<a title="' . __('Edit :x', ['x' => __('Refund')]) . '" href="' . route('vendor.refund.edit', ['id' => $refunds->id]) . '" class="btn btn-xs btn-primary"><i class="feather icon-eye"></i></a>&nbsp';

                $str = '';
                if ($this->hasPermission(['Modules\Refund\Http\Controllers\Vendor\RefundController@edit'])) {
                    $str .= $edit;
                }
                return $str;
            })

            ->rawColumns(['reference', 'shipping_method', 'name', 'quantity_sent', 'price', 'status', 'action'])
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        $refunds = Refund::whereHas('orderDetail', function ($q) {
            $q->where('vendor_id', auth()->user()->vendor()->vendor->id);
        })->with('refundReason', 'orderDetail')->filter();
        return $this->applyScopes($refunds);
    }

    /*
    * DataTable HTML
    *
    * @return \Yajra\DataTables\Html\Builder
    */
    public function html()
    {
        return $this->builder()

        ->addColumn(['data' => 'reference', 'name' => 'reference', 'title' => __('Order Id')])
        ->addColumn(['data' => 'shipping_method', 'name' => 'shipping_method', 'title' => __('Shipping')])
        ->addColumn(['data' => 'refundReason.name', 'name' => 'refundReason.name', 'title' => __('Refund Reason')])
        ->addColumn(['data' => 'quantity_sent', 'name' => 'quantity_sent', 'title' => __('Quantity')])
        ->addColumn(['data' => 'orderDetail.price', 'name' => 'orderDetail.price', 'title' => __('Amount'), 'orderable' => false])
        ->addColumn(['data' => 'status', 'name' => 'status', 'title' => __('Status')])

        ->addColumn(['data'=> 'action', 'name' => 'action', 'title' => __('Action'), 'width' => '5%',
        'visible' => $this->hasPermission(['Modules\Refund\Http\Controllers\Vendor\RefundController@edit']),
        'orderable' => false, 'searchable' => false])

        ->parameters(dataTableOptions());
    }
}
