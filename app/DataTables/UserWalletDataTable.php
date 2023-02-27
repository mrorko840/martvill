<?php
/**
 * @package User wallet DataTable
 * @author TechVillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 14-02-2022
 */

namespace App\DataTables;

use App\Models\{
    Wallet
};
use App\DataTables\DataTable;

class UserWalletDataTable extends DataTable
{
    /*
    * DataTable Ajax
    *
    * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\DataTables
    */
    public function ajax()
    {
        $wallets = $this->query();
        return datatables()
            ->of($wallets)

            ->editColumn('created_at', function ($wallets) {
                return $wallets->format_created_at;
            })

            ->editColumn('balance', function ($wallets) {
                return optional($wallets->currency)->symbol . formatCurrencyAmount($wallets->balance);
            })
            ->editColumn('currency.name', function ($wallets) {
                return optional($wallets->currency)->name;
            })
            ->editColumn('is_default', function ($wallets) {
                return statusBadges($wallets->is_default ? 'Yes' : 'No');
            })

            ->rawColumns(['currency_id', 'balance', 'is_default', 'created_at'])
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        $wallets = Wallet::select('currency_id', 'balance', 'is_default', 'created_at')->where('user_id', $this->userId)->with(['currency:id,name,symbol']);
        return $this->applyScopes($wallets);
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

        ->addColumn(['data' => 'balance', 'name' => 'balance', 'title' => __('Balance')])

        ->addColumn(['data' => 'created_at', 'name' => 'created_at', 'title' => __('Date')])

        ->addColumn(['data' => 'is_default', 'name' => 'is_default', 'title' => __('Default')])

        ->parameters(dataTableOptions());
    }
}
