<?php
/**
 * @package VendorOrderDataTable
 * @author TechVillage <support@techvill.org>
 * @contributor Sakawat Hossain Rony <[sakawat.techvill@gmail.com]>
 * @created 20-01-2022
 */
namespace App\DataTables;
use App\Models\Order;
class VendorOrderDataTable extends DataTable
{
    /*
    * DataTable Ajax
    *
    * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\DataTables
    */
    public function ajax()
    {
        $orders = $this->query();
        return datatables()
            ->of($orders)

            ->editColumn('customer', function ($orders) {
                if (!is_null(optional($orders->user)->id)) {
                    return wrapIt(optional($orders->user)->name, 10, ['columns' => 2]);
                }
                return wrapIt(__('Guest'), 10, ['columns' => 2]);
            })->editColumn('total', function ($orders) {
                return formatNumber($orders->vendorProductPrice(session()->get('vendorId'), $orders->id) + $orders->vendorProductShippingTax(session()->get('vendorId'), $orders->id), optional($orders->currency)->symbol);
            })->editColumn('total_quantity', function ($orders) {
                return formatCurrencyAmount($orders->getTotalVendorProduct(session()->get('vendorId'), $orders->id));
            })->editColumn('reference', function ($orders) {
                return '<a href="' . route('vendorOrder.view', ['id' => $orders->id]) . '">' . $orders->reference . '</a>';
            })->editColumn('status', function ($orders) {
                return optional($orders->orderStatus)->name;
            })->addColumn('created_at', function ($orders) {
                return $orders->format_created_at;
            })->editColumn('payment_status', function ($orders) {
                return statusBadges($orders->payment_status);
            })

            ->addColumn('action', function ($orders) {
                $view = '<a title="' . __('Show') . '" href="' . route('vendorOrder.view', ['id' => $orders->id]) . '" class="btn btn-xs btn-outline-dark"><i class="feather icon-eye"></i></a>&nbsp;';

                $str = '';
                 if ($this->hasPermission(['App\Http\Controllers\Vendor\VendorOrderController@view'])) {
                  $str .= $view;
                 }
                return $str;
            })

            ->rawColumns(['customer', 'total', 'total_quantity', 'reference', 'status', 'created_at', 'payment_status', 'action'])
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        $vendorId = session()->get('vendorId');
        $orders = Order::select('orders.id', 'user_id', 'reference', 'order_date', 'currency_id', 'other_discount_amount', 'other_discount_type', 'orders.shipping_charge', 'orders.tax_charge', 'total', 'paid', 'total_quantity', 'order_status_id', 'payment_status', 'orders.created_at')
                        ->whereHas("orderDetails", function ($q) use ($vendorId) {
                               $q->where('vendor_id', $vendorId);
                             })
                        ->with('orderDetails:id,product_id,order_id,vendor_id,shop_id,price,quantity,discount_amount,discount_type,order_status_id', 'user:id,name','orderStatus:id,slug,name',)
                        ->filter();
        return $this->applyScopes($orders);
    }

    /*
    * DataTable HTML
    *
    * @return \Yajra\DataTables\Html\Builder
    */
    public function html()
    {
        return $this->builder()
            ->addColumn(['data' => 'id', 'name' => 'id', 'title' => __('Id'), 'visible' => false])
            ->addColumn(['data' => 'reference', 'name' => 'reference', 'title' => __('Invoice')])

            ->addColumn(['data' => 'customer', 'name' => 'user.name', 'title' => __('Customer')])

            ->addColumn(['data' => 'total_quantity', 'name' => 'total_quantity', 'title' => __('Number of Products'), 'orderable' => false])

            ->addColumn(['data' => 'total', 'name' => 'total', 'title' => __('Total Amount')])

            ->addColumn(['data' => 'status', 'name' => 'orderStatus.name', 'title' => __('Status')])

            ->addColumn(['data' => 'payment_status', 'name' => 'payment_status', 'title' => __('Payment Status')])

            ->addColumn(['data' => 'created_at', 'name' => 'created_at', 'title' => __('Created at')])

            ->addColumn(['data'=> 'action', 'name' => 'action', 'title' => __('Action'), 'width' => '5%',
                'visible' => $this->hasPermission(['App\Http\Controllers\Vendor\VendorOrderController@view']),
                'orderable' => false, 'searchable' => false])

            ->parameters(dataTableOptions());
    }
}
