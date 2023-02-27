<?php

/**
 * @package RoleListDataTable
 * @author TechVillage <support@techvill.org>
 * @contributor Sabbir Al-Razi <[sabbir.techvill@gmail.com]>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @contributor Md Abdur Rahaman Zihad <[zihad.techvill@gmail.com]>
 * @created 20-05-2021
 * @modified 30-05-2022
 */

namespace App\DataTables;

use App\Models\{
    User
};
use App\DataTables\DataTable;

class UserListDataTable extends DataTable
{
    /*
    * DataTable Ajax
    *
    * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\DataTables
    */
    public function ajax()
    {
        $users = $this->query();
        return datatables()
            ->of($users)

            ->addColumn('picture', function ($users) {
                return '<img src="' . $users->fileUrl() . '" alt="' . __('image') . '" width="50" height="50">';
            })
            ->editColumn('name', function ($users) {
                $html = '<a href="' . route('users.edit', ['id' => $users->id]) . '">' . wrapIt($users->name, 10) . '</a>';
                $html .= '<a class="badge badge-info ml-2" href="' . route('impersonator', ['impersonate' => base64_encode($users->id)]) . '" target="_blank">' . __('Login as') . '</a>';
                return $html;
            })
            ->editColumn('status', function ($users) {
                return statusBadges(lcfirst($users->status));
            })
            ->addColumn('role', function ($users) {
                $str = '';
                foreach ($users->roles as $role) {
                    $str .= '<p><span class="fas fa-bullseye mr-2"></span>' . $role->name . '</p>';
                }
                return $str;
            })
            ->editColumn('created_at', function ($users) {
                return $users->format_created_at;
            })
            ->addColumn('action', function ($users) {
                $edit = '<a title="' . __('Edit') . '" href="' . route('users.edit', ['id' => $users->id]) . '" class="btn btn-xs btn-primary"><i class="feather icon-edit"></i></a>&nbsp;';

                $delete = '<form method="post" action="' . route('users.destroy', ['id' => $users->id]) . '" id="delete-user-' . $users->id . '" accept-charset="UTF-8" class="display_inline">
                        ' . csrf_field() . '
                        <button title="' . __('Delete') . '" class="btn btn-xs btn-danger confirm-delete" type="button" data-id=' . $users->id . ' data-delete="user" data-label="Delete" data-bs-toggle="modal" data-bs-target="#confirmDelete" data-title="' . __('Delete :x', ['x' => __('User')]) . '" data-message="' . __('Are you sure to delete this?') . '">
                        <i class="feather icon-trash-2"></i>
                        </button>
                        </form>';

                $str = '';
                if ($this->hasPermission(['App\Http\Controllers\UserController@edit'])) {
                    $str .= $edit;
                }
                if ($this->hasPermission(['App\Http\Controllers\UserController@destroy']) && optional($users->role())->slug <> 'super-admin') {
                    $str .= $delete;
                }
                return $str;
            })
            ->rawColumns(['picture', 'name', 'email', 'role', 'status', 'action'])
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        $users = User::query()->filter();
        return $this->applyScopes($users);
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
            ->addColumn(['data' => 'picture', 'name' => 'picture', 'title' => __('Picture'), 'orderable' => false, 'searchable' => false])
            ->addColumn(['data' => 'name', 'name' => 'name', 'title' => __('Name')])
            ->addColumn(['data' => 'email', 'name' => 'email', 'title' => __('Email')])
            ->addColumn(['data' => 'role', 'name' => 'role', 'title' => __('Role'), 'orderable' => false])
            ->addColumn(['data' => 'status', 'name' => 'status', 'title' => __('Status')])
            ->addColumn(['data' => 'created_at', 'name' => 'created_at', 'title' => __('Created at')])
            ->addColumn([
                'data' => 'action', 'name' => 'action', 'title' => __('Action'), 'width' => '10%',
                'visible' => $this->hasPermission(['App\Http\Controllers\UserController@edit', 'App\Http\Controllers\UserController@destroy']),
                'orderable' => false, 'searchable' => false
            ])
            ->parameters(dataTableOptions());
    }
}
