<?php
/**
 * @package CouponDataTable
 * @author TechVillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 28-04-2022
 */

namespace Modules\Newsletter\DataTables;

use App\DataTables\DataTable;
use Modules\Newsletter\Entities\Subscriber;

class SubscriberDataTable extends DataTable
{
    /*
    * DataTable Ajax
    *
    * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\DataTables
    */
    public function ajax()
    {
        $subscriber = $this->query();
        return datatables()
            ->of($subscriber)
            ->addColumn('email', function ($subscriber) {
                return  wrapIt($subscriber->email, 20, ['columns' => 1]);
            })->addColumn('status', function ($subscriber) {
                return statusBadges($subscriber->status);
            })->addColumn('confirmation_date', function ($subscriber) {
                return timeZoneFormatDate($subscriber->confirmation_date);
            })->addColumn('action', function ($subscriber) {
                $str = '';
                if ($this->hasPermission(['Modules\Newsletter\Http\Controllers\SubscriberController@edit'])) {
                    $str .= '<a title="' . __('Edit :x', ['x' => __('Subscriber')]) . '" href="' . route('subscriber.edit', ['id' => $subscriber->id]) . '" class="btn btn-xs btn-primary"><i class="feather icon-edit"></i></a>&nbsp';
                }
                if ($this->hasPermission(['Modules\Newsletter\Http\Controllers\SubscriberController@destroy'])) {
                    $str .= '<form method="post" action="' . route('subscriber.delete', ['id' => $subscriber->id]) . '" id="delete-subscriber-'. $subscriber->id . '" accept-charset="UTF-8" class="display_inline">
                        ' . csrf_field() . '
                        <button title="' . __('Delete :x', ['x' => __('Subscriber')]) . '" class="btn btn-xs btn-danger confirm-delete" type="button" data-id=' . $subscriber->id . ' data-label="Delete" data-delete="subscriber" data-bs-toggle="modal" data-bs-target="#confirmDelete" data-title="' . __('Delete :x', ['x' => __('Subscriber')]) . '" data-message="' . __('Are you sure to delete this?') . '">
                        <i class="feather icon-trash-2"></i>
                        </button>
                        </form>';
                }
                return $str;
            })
            ->rawColumns(['email', 'status', 'confirmation_date', 'action'])
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        $subscriber = Subscriber::filter();
        return $this->applyScopes($subscriber);
    }

    /*
    * DataTable HTML
    *
    * @return \Yajra\DataTables\Html\Builder
    */
    public function html()
    {
        return $this->builder()
        ->addColumn(['data' => 'email', 'name' => 'email', 'title' => __('Email')])
        ->addColumn(['data' => 'status', 'name' => 'status', 'title' => __('Status')])
        ->addColumn(['data' => 'confirmation_date', 'name' => 'confirmation_date', 'title' => __('Confirmation Date')])
        ->addColumn(['data'=> 'action', 'name' => 'action', 'title' => __('Action'), 'width' => '5%',
        'visible' => $this->hasPermission(['Modules\Newsletter\Http\Controllers\SubscriberController@edit', 'Modules\Newsletter\Http\Controllers\SubscriberController@destroy']),
        'orderable' => false, 'searchable' => false])
        ->parameters(dataTableOptions());
    }
}
