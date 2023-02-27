<?php
/**
 * @package VendorTransactionDataTable
 * @author TechVillage <support@techvill.org>
 * @contributor Sakawat Hossain Rony <[sakawat.techvill@gmail.com]>
 * @created 12-05-2022
 */
namespace App\DataTables;

use App\Models\Transaction;

class VendorTransactionDataTable extends DataTable
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
            ->editColumn('user.name', function ($transactions) {
                return  wrapIt(optional($transactions->user)->name, 10);
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
            })->editColumn('charge_amount', function ($transactions) {
                return formatCurrencyAmount($transactions->charge_amount + $transactions->commission_amount + $transactions->discount_amount);
            })->editColumn('status', function ($transactions) {
                return statusBadges($transactions->status);
            })->editColumn('transaction_date', function ($transactions) {
                return formatDate($transactions->transaction_date);
            })->editColumn('order.reference', function ($transactions) {

                if (isset($transactions->order)) {
                    return '<a href="' . route('vendorOrder.view', ['id' => optional($transactions->order)->id]) . '">' . optional($transactions->order)->reference . '</a>';
                }

                return null;
            })
            ->rawColumns(['user.name', 'withdrawal_method.name', 'currency_id', 'withdrawal_method_id', 'amount', 'charge_amount', 'commission_amount', 'discount_amount', 'total_amount', 'transaction_type', 'status', 'transaction_date', 'order.reference'])
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        $transactions = Transaction::select('transactions.id', 'transactions.user_id', 'transactions.currency_id', 'transactions.status', 'withdrawal_method_id', 'amount', 'charge_amount', 'commission_amount', 'discount_amount', 'total_amount', 'transaction_type', 'order_id', 'transaction_date')
            ->where('transactions.vendor_id', session()->get('vendorId'))
            ->with(['user:id,name', 'currency:id,name', 'withdrawalMethod:id,method_name', 'order:id,reference'])
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
            ->addColumn(['data' => 'order.reference', 'name' => 'order.reference', 'title' => __('Reference')])
            ->addColumn(['data' => 'user.name', 'name' => 'user.name', 'title' => __('Payer')])
            ->addColumn(['data' => 'currency.name', 'name' => 'currency.name', 'title' => __('Currency')])
            ->addColumn(['data' => 'withdrawal_method.method_name', 'name' => 'withdrawalMethod.method_name', 'title' => __('Method')])
            ->addColumn(['data' => 'amount', 'name' => 'amount', 'title' => __('Amount')])
            ->addColumn(['data' => 'charge_amount', 'name' => 'charge_amount', 'title' => __('Fees')])
            ->addColumn(['data' => 'discount_amount', 'name' => 'discount_amount', 'title' => __('Discount')])
            ->addColumn(['data' => 'total_amount', 'name' => 'total_amount', 'title' => __('Total')])
            ->addColumn(['data' => 'transaction_type', 'name' => 'transaction_type', 'title' => __('Type')])
            ->addColumn(['data' => 'status', 'name' => 'status', 'title' => __('Status')])
            ->addColumn(['data' => 'transaction_date', 'name' => 'transaction_date', 'title' => __('Date')])
            ->parameters(dataTableOptions());
    }
}
