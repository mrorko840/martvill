<?php
/**
 * @package OrderDataTable
 * @author TechVillage <support@techvill.org>
 * @contributor Sakawat Hossain Rony <[sakawat.techvill@gmail.com]>
 * @created 19-01-2022
 */
namespace App\DataTables;

use App\Models\Order;
use Auth;

class OrderDataTable extends DataTable
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
                    return '<a target="_blank" href="' . route('users.edit', ['id' => optional($orders->user)->id]) . '">' . wrapIt(optional($orders->user)->name, 10, ['columns' => 2]) . '</a>';
                }
                return wrapIt(__('Guest'), 10, ['columns' => 2]);
            })->editColumn('total', function ($orders) {
                return formatNumber($orders->total, optional($orders->currency)->symbol);
            })->editColumn('reference', function ($orders) {
                return '<a href="' . route('order.view', ['id' => $orders->id]) . '">' . $orders->reference . '</a>';
            })->editColumn('status', function ($orders) {
                return optional($orders->orderStatus)->name;
            })->addColumn('created_at', function ($orders) {
                return $orders->format_created_at;
            })->editColumn('payment_status', function ($orders) {
                return statusBadges($orders->payment_status);
            })->addColumn('vendor', function ($orders) {
                return $orders->vendorName($orders->id);
            })

            ->addColumn('action', function ($orders) {
                $view = '<a title="' . __('Show') . '" href="' . route('order.view', ['id' => $orders->id]) . '" class="btn btn-xs btn-outline-dark"><i class="feather icon-eye"></i></a>&nbsp;';
                $delete = '<form method="post" action="' . route('order.destroy', ['id' => $orders->id]) .'" id="delete-order-'. $orders->id . '" accept-charset="UTF-8" class="display_inline">
                        ' . method_field('DELETE') . '
                        ' . csrf_field() . '
                        <button title="' . __('Delete') . '" class="btn btn-xs btn-danger confirm-delete" type="button" data-id=' . $orders->id . ' data-delete="order" data-label="Delete" data-bs-toggle="modal" data-bs-target="#confirmDelete" data-title="' . __('Delete :x', ['x' => __('Order')]) . '" data-message="' . __('Are you sure to delete this?') . '">
                        <i class="feather icon-trash-2"></i>
                        </button>
                        </form>';

                $str = '';
                if ($this->hasPermission(['App\Http\Controllers\AdminOrderController@view'])) {
                    $str .= $view;
                }
                if ($this->hasPermission(['App\Http\Controllers\AdminOrderController@destroy'])) {
                    $str .= $delete;
                }
                return $str;
            })

            ->rawColumns(['customer', 'total', 'status', 'created_at', 'reference', 'action', 'payment_status', 'vendor'])
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        $orders = Order::select('orders.id', 'user_id', 'reference', 'order_date', 'currency_id', 'other_discount_amount', 'other_discount_type', 'shipping_charge', 'tax_charge', 'total', 'paid', 'order_status_id', 'payment_status', 'orders.created_at')->with(['orderDetails:id,product_id,order_id,vendor_id,shop_id,price,quantity,discount_amount,discount_type,order_status_id', 'orderStatus:id,slug,name', 'user:id,name'])->filter();
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
            ->addColumn(['data' => 'reference', 'name' => 'reference', 'title' => __('Order')])

            ->addColumn(['data' => 'customer', 'name' => 'user.name', 'title' => __('Customer')])

            ->addColumn(['data' => 'vendor', 'name' => 'vendor', 'title' => __('Vendors'), 'orderable' => false, 'searchable' => false])

            ->addColumn(['data' => 'total', 'name' => 'total', 'title' => __('Total')])

            ->addColumn(['data' => 'status', 'name' => 'orderStatus.name', 'title' => __('Order Status')])

            ->addColumn(['data' => 'payment_status', 'name' => 'payment_status', 'title' => __('Payment Status')])

            ->addColumn(['data' => 'created_at', 'name' => 'created_at', 'title' => __('Created')])

            ->addColumn(['data'=> 'action', 'name' => 'action', 'title' => __('Action'), 'width' => '10%',
                'visible' => $this->hasPermission(['App\Http\Controllers\AdminOrderController@view', 'App\Http\Controllers\AdminOrderController@destroy']),
                'orderable' => false, 'searchable' => false])

            ->parameters(dataTableOptions());
    }
}
