<?php
/**
 * @package WalletHistoryListDataTable
 * @author TechVillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 21-02-2022
 */

namespace App\DataTables;

use App\Models\{
    Transaction
};
use App\DataTables\DataTable;

class WithdrawalHistoryDataTable extends DataTable
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
            ->editColumn('currency.name', function ($transactions) {
                return optional($transactions->currency)->name;
            })->editColumn('withdrawal_method.method_name', function ($transactions) {
                return optional($transactions->withdrawalMethod)->method_name;
            })->editColumn('amount', function ($transactions) {
                return formatCurrencyAmount($transactions->amount);
            })->editColumn('total_amount', function ($transactions) {
                return formatCurrencyAmount($transactions->total_amount);
            })->editColumn('charge_amount', function ($transactions) {
                return formatCurrencyAmount($transactions->charge_amount + $transactions->commission_amount + $transactions->discount_amount);
            })->editColumn('transaction_date', function ($transactions) {
                return timeZoneFormatDate($transactions->transaction_date);
            })->editColumn('updated_at', function ($transactions) {
                return $transactions->updated_at != null ? $transactions->format_updated_at : '';
            })->editColumn('status', function ($transactions) {
                return statusBadges($transactions->status);
            })

            ->rawColumns(['withdrawal_method.name', 'currency_id', 'withdrawal_method_id', 'amount', 'charge_amount', 'commission_amount', 'discount_amount', 'total_amount', 'transaction_type', 'transaction_date', 'updated_at', 'status'])

            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        $transactions = Transaction::select('transactions.id', 'currency_id', 'transactions.status', 'withdrawal_method_id', 'amount', 'charge_amount', 'commission_amount', 'discount_amount', 'total_amount', 'transaction_type', 'transaction_date', 'transactions.updated_at')->where('user_id', auth()->user()->id)->where('transaction_type', 'Withdrawal')->with(['currency:id,name', 'withdrawalMethod:id,method_name']);
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
            ->addColumn(['data' => 'currency.name', 'name' => 'currency.name', 'title' => __('Currency')])
            ->addColumn(['data' => 'withdrawal_method.method_name', 'name' => 'withdrawalMethod.method_name', 'title' => __('Method')])
            ->addColumn(['data' => 'amount', 'name' => 'amount', 'title' => __('Amount')])
            ->addColumn(['data' => 'charge_amount', 'name' => 'charge_amount', 'title' => __('Fees')])
            ->addColumn(['data' => 'total_amount', 'name' => 'total_amount', 'title' => __('Total')])
            ->addColumn(['data' => 'transaction_type', 'name' => 'transaction_type', 'title' => __('Type')])
            ->addColumn(['data' => 'transaction_date', 'name' => 'transaction_date', 'title' => __('Date')])
            ->addColumn(['data' => 'updated_at', 'name' => 'updated_at', 'title' => __('Updated At')])
            ->addColumn(['data' => 'status', 'name' => 'status', 'title' => __('Status')])

            ->parameters(dataTableOptions());
    }
}
