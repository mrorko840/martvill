<?php
/**
 * @package TransactionListDataTable
 * @author TechVillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 15-02-2022
 */

namespace App\DataTables;

use App\Models\{
    Transaction
};
use App\DataTables\DataTable;

class TransactionListDataTable extends DataTable
{
    /*
    * DataTable Ajax
    *
    * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\DataTables
    */
    public function ajax()
    {
        $transactions = $this->query();
        return datatables()
            ->of($transactions)
            ->editColumn('vendor.name', function ($transactions) {
                if (optional($transactions->vendor)->id) {
                    return '<a href="' . route('vendors.edit', ['id' => $transactions->vendor->id]) . '">' . wrapIt($transactions->vendor->name, 10) . '</a>';
                }
                return null;
            })->editColumn('currency.name', function ($transactions) {
                return optional($transactions->currency)->name;
            })->editColumn('withdrawal_method.method_name', function ($transactions) {
                if ($transactions->transaction_type == 'Withdrawal') {
                    return optional($transactions->withdrawalMethod)->method_name;
                } elseif ($transactions->transaction_type == 'Order') {
                    return optional(optional($transactions->order)->paymentMethod)->gateway;
                }
                return null;
            })->editColumn('amount', function ($transactions) {
                return formatCurrencyAmount($transactions->amount);
            })->editColumn('total_amount', function ($transactions) {
                return formatCurrencyAmount($transactions->total_amount);
            })->editColumn('discount_amount', function ($transactions) {
                return formatCurrencyAmount($transactions->discount_amount);
            })->editColumn('status', function ($transactions) {
                return statusBadges($transactions->status);
            })->editColumn('transaction_date', function ($transactions) {
                return formatDate($transactions->transaction_date);
            })->editColumn('reference', function ($transactions) {
                if (isset($transactions->order)) {
                    return '<a href="' . route('order.view', ['id' => $transactions->order->id]) . '">' . $transactions->order->reference . '</a>';
                }
                return null;
            })
            ->addColumn('action', function ($transactions) {
                if ($this->hasPermission(['App\Http\Controllers\TransactionController@edit'])) {
                    return '<a title="' . __('Show') . '" href="' . route('transaction.edit', ['id' => $transactions->id]) . '" class="btn btn-xs btn-outline-dark"><i class="feather icon-eye"></i></a>&nbsp;';
                }
                return null;
            })
            ->rawColumns(['reference', 'vendor.name', 'withdrawal_method.name', 'currency_id', 'withdrawal_method_id', 'amount', 'charge_amount', 'commission_amount', 'discount_amount', 'total_amount', 'transaction_type', 'status', 'action', 'transaction_date'])
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        $transactions = Transaction::select('transactions.id', 'transactions.user_id', 'transactions.currency_id', 'transactions.status', 'withdrawal_method_id', 'amount', 'charge_amount', 'commission_amount', 'discount_amount', 'total_amount', 'order_id', 'transaction_date', 'transaction_type', 'transactions.vendor_id')
            ->with(['user:id,name', 'currency:id,name', 'withdrawalMethod:id,method_name', 'order:id,reference', 'vendor:id,name'])
            ->filter();
        return $this->applyScopes($transactions);
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
            ->addColumn(['data' => 'reference', 'name' => 'order.reference', 'title' => __('Reference')])
            ->addColumn(['data' => 'user.name', 'name' => 'user.name', 'title' => __('Payer')])
            ->addColumn(['data' => 'vendor.name', 'name' => 'vendor.name', 'title' => __('Vendor')])
            ->addColumn(['data' => 'currency.name', 'name' => 'currency.name', 'title' => __('Currency')])
            ->addColumn(['data' => 'withdrawal_method.method_name', 'name' => 'withdrawalMethod.method_name', 'title' => __('Method')])
            ->addColumn(['data' => 'amount', 'name' => 'amount', 'title' => __('Amount')])
            ->addColumn(['data' => 'discount_amount', 'name' => 'discount_amount', 'title' => __('Discount')])
            ->addColumn(['data' => 'total_amount', 'name' => 'total_amount', 'title' => __('Total')])
            ->addColumn(['data' => 'transaction_type', 'name' => 'transaction_type', 'title' => __('Type')])
            ->addColumn(['data' => 'status', 'name' => 'status', 'title' => __('Status')])
            ->addColumn(['data' => 'transaction_date', 'name' => 'transaction_date', 'title' => __('Date')])
            ->addColumn(['data'=> 'action', 'name' => 'action', 'title' => __('Action'), 'width' => '5%',
            'visible' => $this->hasPermission(['App\Http\Controllers\TransactionController@edit']),
            'orderable' => false, 'searchable' => false])
            ->parameters(dataTableOptions());
    }
}
