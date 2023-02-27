<?php

namespace App\DataTables;

use App\Models\User;
use App\DataTables\DataTable;
use App\Traits\ModelTraits\{Filterable, FormatDateTime};
use Spatie\Activitylog\Models\Activity;

class UsersActivityDataTable extends DataTable
{
    use Filterable, FormatDateTime;

    protected $propertiesArray = [];

    protected $userNames = [];

    /*
    * DataTable Construct
    *
    * @return void
    */
    public function __construct()
    {
        $this->userNames = User::all()->pluck('name','id');
    }

    /*
    * DataTable Ajax
    *
    * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\DataTables
    */
    public function ajax()
    {
        $activities = $this->query();

        return datatables()
            ->of($activities)
            ->addColumn('log_name', function ($activity) {
                return str_replace('USER ', '', $activity->log_name);
            })
            ->addColumn('description', function ($activity) {
                return $activity->description;
            })
            ->addColumn('causer', function ($activity) {
                return (isset($activity->causer_id) && isset($this->userNames[$activity->causer_id])) ? '<a href="' . (string)route('users.edit', ['id' => $activity->causer_id]) . '">' . $this->userNames[$activity->causer_id] . '</a>' : 'N/A';
            })
            ->addColumn('browser', function ($activity) {
                $this->propertiesArray = json_decode($activity->properties, true);
                return $this->propertiesArray['browser'] . ' ' . $this->propertiesArray['browser_version'];
            })
            ->addColumn('platform', function($activity) {
                return $this->propertiesArray['platform'];
            })
            ->addColumn('ip', function($activity) {
                return $this->propertiesArray['ip_address'];
            })
            ->addColumn('created_at', function ($activity) {
                return $this->formatDateTime($activity->created_at);
            })
            ->addColumn('action', function ($activity) {
                $delete = '<form method="post" action="' . route('users.activity.delete', ['id' => $activity->id]) . '" id="delete-activity-' . $activity->id . '" accept-charset="UTF-8" class="display_inline">
                        ' . csrf_field() . '
                        <button title="' . __('Delete') . '" class="btn btn-xs btn-danger confirm-delete" type="button" data-id=' . $activity->id . ' data-delete="activity" data-label="Delete" data-bs-toggle="modal" data-bs-target="#confirmDelete" data-title="' . __('Delete :x', ['x' => __('Activity')]) . '" data-message="' . __('Are you sure to delete this?') . '">
                        <i class="feather icon-trash-2"></i>
                        </button>

                        </form>';
                return $delete;
            })
            ->rawColumns(['log_name', 'description', 'causer', 'browser', 'platform', 'ip', 'created_at','action'])
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        $activities = Activity::query()->where('log_name', 'LIKE', '%user%');

        if (count(request()->query()) > 0) {
            $activities = $this->scopeFilter($activities, 'App\\Filters\\UsersActivityLogFilter');
        }

        return $this->applyScopes($activities);
    }

    /*
    * DataTable HTML
    *
    * @return \Yajra\DataTables\Html\Builder
    */
    public function html()
    {
        return $this->builder()
            ->addColumn(['data' => 'log_name', 'name' => 'log_name', 'title' => __('Type'), 'orderable' => false, 'searchable' => false])
            ->addColumn(['data' => 'description', 'name' => 'description', 'title' => __('Description'), 'orderable' => false])
            ->addColumn(['data' => 'causer', 'name' => 'causer', 'title' => __('User'), 'orderable' => false])
            ->addColumn(['data' => 'browser', 'name' => 'browser', 'title' => __('Browser'), 'orderable' => false])
            ->addColumn(['data' => 'platform', 'name' => 'platform', 'title' => __('Platform'), 'orderable' => false, 'width' => '5%'])
            ->addColumn(['data' => 'ip', 'name' => 'ip', 'title' => __('IP'), 'orderable' => false])
            ->addColumn(['data' => 'created_at', 'name' => 'created_at', 'title' => __('Created at'), 'orderable' => false])
            ->addColumn(['data' => 'action', 'name' => 'action', 'title' => __('Action'), 'orderable' => false, 'searchable' => false, 'width' => '5%'])
            ->parameters(dataTableOptions());
    }
}
