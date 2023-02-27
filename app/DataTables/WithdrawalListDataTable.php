<?php
/**
 * @package WithdrawalListDataTable
 * @author TechVillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 01-03-2022
 */

namespace App\DataTables;

use App\Models\{
    Transaction
};
use App\DataTables\DataTable;

class WithdrawalListDataTable extends DataTable
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
                return '<a href="' . route('users.edit', ['id' => optional($transactions->user)->id]) . '">' . wrapIt(optional($transactions->user)->name, 10) . '</a>';
                return optional($transactions->user)->name;
            })->editColumn('currency.name', function ($transactions) {
                return optional($transactions->currency)->name;
            })->editColumn('withdrawal_method.method_name', function ($transactions) {
                return optional($transactions->withdrawalMethod)->method_name;
            })->editColumn('amount', function ($transactions) {
                return formatCurrencyAmount($transactions->amount);
            })->editColumn('total_amount', function ($transactions) {
                return formatCurrencyAmount($transactions->total_amount);
            })->editColumn('charge_amount', function ($transactions) {
                return formatCurrencyAmount($transactions->charge_amount + $transactions->commission_amount + $transactions->discount_amount);
            })->editColumn('status', function ($transactions) {
                return statusBadges($transactions->status);
            })
            ->addColumn('action', function ($transactions) {
                $edit = '<a title="' . __('Show') . '" href="' . route('withdrawal.edit', ['id' => $transactions->id]) . '" class="btn btn-xs btn-outline-dark"><i class="feather icon-eye"></i></a>&nbsp;';
                $str = '';
                if ($this->hasPermission(['App\Http\Controllers\WithdrawalController@edit'])) {
                    $str .= $edit;
                }

                return $str;
            })
            ->rawColumns(['user.name', 'withdrawal_method.name', 'currency_id', 'withdrawal_method_id', 'amount', 'charge_amount', 'commission_amount', 'discount_amount', 'total_amount', 'status', 'action'])

            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        $transactions = Transaction::select('transactions.id', 'user_id', 'currency_id', 'transactions.status', 'withdrawal_method_id', 'amount', 'charge_amount', 'commission_amount', 'discount_amount', 'total_amount')->where('transaction_type', 'Withdrawal')->with(['user:id,name', 'currency:id,name', 'withdrawalMethod:id,method_name'])->filter();
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
            ->addColumn(['data' => 'user.name', 'name' => 'user.name', 'title' => __('Vendor')])
            ->addColumn(['data' => 'currency.name', 'name' => 'currency.name', 'title' => __('Currency')])
            ->addColumn(['data' => 'withdrawal_method.method_name', 'name' => 'withdrawalMethod.method_name', 'title' => __('Method')])
            ->addColumn(['data' => 'amount', 'name' => 'amount', 'title' => __('Amount')])
            ->addColumn(['data' => 'charge_amount', 'name' => 'charge_amount', 'title' => __('Fees')])
            ->addColumn(['data' => 'total_amount', 'name' => 'total_amount', 'title' => __('Total')])
            ->addColumn(['data' => 'status', 'name' => 'status', 'title' => __('Status')])

            ->addColumn(['data'=> 'action', 'name' => 'action', 'title' => __('Action'), 'width' => '5%',
            'visible' => $this->hasPermission(['App\Http\Controllers\WithdrawalController@edit']),
            'orderable' => false, 'searchable' => false])
            ->parameters(dataTableOptions());
    }
}
