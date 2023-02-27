<?php
/**
 * @package VendorListDataTable
 * @author TechVillage <support@techvill.org>
 * @contributor Sakawat Hossain Rony <[sakawat.techvill@gmail.com]>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 17-08-2021
 * @modified 04-10-2021
 */

namespace App\DataTables;

use App\Models\{
    Vendor
};
use App\DataTables\DataTable;

class VendorListDataTable extends DataTable
{
    /*
    * DataTable Ajax
    *
    * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\DataTables
    */
    public function ajax()
    {
        $vendors = $this->query();
        return datatables()
            ->of($vendors)
            ->addColumn('logo', function ($vendors) {
                return '<img src="' . (optional($vendors->logo)->fileUrl() ?? $vendors->fileUrl()) . '" alt="' . __('image') . '" width="50" height="50">';
            })->editColumn('name', function ($vendors) {
                return '<a href="' . route('vendors.edit', ['id' => $vendors->id]) . '">' . wrapIt($vendors->name, 10, ['columns' => 4]) . '</a>';
            })->editColumn('email', function ($vendors) {
                return wrapIt($vendors->email, 20, ['columns' => 4]);
            })->editColumn('phone', function ($vendors) {
                return wrapIt($vendors->phone, 15, ['columns' => 4]);
            })->editColumn('user', function ($vendors) {
                $html = '';
                foreach ($vendors->userList as  $user) {
                    $html .= '<a href="' . route('users.edit', ['id' => $user->id]) . '">' . wrapIt($user->name, 10, ['columns' => 4]) . '</a>';
                }
                return $html;
            })->editColumn('status', function ($vendors) {
                return statusBadges(lcfirst($vendors->status));
            })->addColumn('action', function ($vendors) {
                $str = '';
                if ($this->hasPermission(['App\Http\Controllers\VendorController@edit'])) {
                    $str .= '<a title="' . __('Edit') . '" href="' . route('vendors.edit', ['id' => $vendors->id]) . '" class="btn btn-xs btn-outline-dark"><i class="feather icon-edit"></i></a>&nbsp;';
                }
                if ($this->hasPermission(['App\Http\Controllers\VendorController@destroy'])) {
                    $str .= '<form method="post" action="' . route('vendors.destroy', ['id' => $vendors->id]) . '" id="delete-user-' . $vendors->id . '" accept-charset="UTF-8" class="display_inline">
                        ' . csrf_field() . '
                        <button title="' . __('Delete') . '" class="btn btn-xs btn-danger confirm-delete" type="button" data-id=' . $vendors->id . ' data-delete="user" data-label="Delete" data-bs-toggle="modal" data-bs-target="#confirmDelete" data-title="' . __('Delete :x', ['x' => __('Vendor')]) . '" data-message="' . __('Are you sure to delete this?') . '">
                        <i class="feather icon-trash-2"></i>
                        </button>
                        </form>';
                }
                return $str;
            })
            ->rawColumns(['logo', 'name', 'email', 'phone', 'status', 'action', 'user'])
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        $vendors = Vendor::select('vendors.id', 'vendors.name', 'vendors.email', 'vendors.phone', 'vendors.created_at', 'vendors.status')-> with('userList:id,name')->filter();
        return $this->applyScopes($vendors);
    }

    /*
    * DataTable HTML
    *
    * @return \Yajra\DataTables\Html\Builder
    */
    public function html()
    {
        return $this->builder()
            ->addColumn(['data' => 'id', 'name' => 'vendors.id', 'title' => __('Id'), 'visible' => false])
            ->addColumn(['data' => 'logo', 'name' => 'logo', 'title' => __('Logo'), 'orderable' => false, 'searchable' => false])
            ->addColumn(['data' => 'name', 'name' => 'name', 'title' => __('Vendor Name')])
            ->addColumn(['data' => 'email', 'name' => 'email', 'title' => __('Email')])
            ->addColumn(['data' => 'phone', 'name' => 'phone', 'title' => __('Phone')])
            ->addColumn(['data' => 'user', 'name' => 'userList.name', 'title' => __('Username')])
            ->addColumn(['data' => 'status', 'name' => 'status', 'title' => __('Status')])
            ->addColumn(['data'=> 'action', 'name' => 'action', 'title' => __('Action'), 'width' => '12%',
            'visible' => $this->hasPermission(['App\Http\Controllers\VendorController@edit', 'App\Http\Controllers\VendorController@destroy']),
            'orderable' => false, 'searchable' => false])
            ->parameters(dataTableOptions());
    }
}
