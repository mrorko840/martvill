<?php
/**
 * @package AttributeController
 * @author TechVillage <support@techvill.org>
 * @contributor Sakawat Hossain Rony <[sakawat.techvill@gmail.com]>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 07-09-2021
 * @modified 04-10-2021
 */
namespace App\DataTables;

use App\Models\{
    Attribute
};
use App\DataTables\DataTable;

class AttributeDataTable extends DataTable
{
    /*
    * DataTable Ajax
    *
    * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\DataTables
    */
    public function ajax()
    {
        $attributes = $this->query();
        return datatables()
            ->of($attributes)

            ->editColumn('name', function ($attributes) {
                return '<a href="' . route('attribute.edit', ['id' => $attributes->id]) . '">' . wrapIt($attributes->name, 10, ['columns' => 2,'trim' => true, 'trimLength' => 20]) . '</a>';
            })

            ->editColumn('status', function ($attributes) {
                return statusBadges(lcfirst($attributes->status));
            })->addColumn('action', function ($attributes) {
                $edit = '<a title="' . __('Edit') . '" href="' . route('attribute.edit', ['id' => $attributes->id]) .'" class="btn btn-xs btn-primary"><i class="feather icon-edit"></i></a>&nbsp;';

                $delete = '<form method="post" action="' . route('attribute.destroy', ['id' => $attributes->id]) .'" id="delete-user-'. $attributes->id . '" accept-charset="UTF-8" class="display_inline">
                        ' . method_field('DELETE') . '
                        ' . csrf_field() . '
                        <button title="' . __('Delete') . '" class="btn btn-xs btn-danger confirm-delete" type="button" data-id=' . $attributes->id . ' data-delete="user" data-label="Delete" data-bs-toggle="modal" data-bs-target="#confirmDelete" data-title="' . __('Delete :x', ['x' => __('Attribute')]) . '" data-message="' . __('Are you sure to delete this?') . '">
                        <i class="feather icon-trash-2"></i>
                        </button>
                        </form>';

                $str = '';
                if ($this->hasPermission(['App\Http\Controllers\AttributeController@edit'])) {
                    $str .= $edit;
                }
                if ($this->hasPermission(['App\Http\Controllers\AttributeController@destroy'])) {
                    $str .= $delete;
                }
                return $str;
            })

            ->rawColumns(['group', 'name', 'status', 'is_filterable', 'action'])
            ->filter(function ($instance){
                if (in_array(request('status'), getStatus())) {
                    $instance->where('status', request('status'));
                }
                if (request('group')) {
                    $instance->whereHas('attributeGroup', function ($query) {
                        $query->where('id', request('group'));
                    });
                }

                if (isset(request('search')['value'])) {
                    $keyword = xss_clean(request('search')['value']);
                    if (!empty($keyword)) {
                        $instance->where(function ($query) use ($keyword) {
                            $query->WhereLike('name', $keyword)
                                ->OrWhereLike('status', $keyword)
                                ->OrWhereLike('type', $keyword)
                                ->orWhereHas('attributeGroup', function ($query)use($keyword) {
                                    $query->WhereLike('name', $keyword);
                                });
                        });
                    }
                }
            })
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        $attributes = Attribute::query()->with(['attributeGroup']);
        return $this->applyScopes($attributes);
    }

    /*
    * DataTable HTML
    *
    * @return \Yajra\DataTables\Html\Builder
    */
    public function html()
    {
        return $this->builder()

            ->addColumn(['data' => 'name', 'name' => 'name', 'title' => __('Name')])

            ->addColumn(['data' => 'status', 'name' => 'status', 'title' => __('Status')])

            ->addColumn(['data'=> 'action', 'name' => 'action', 'title' => __('Action'), 'width' => '10%',
                'visible' => $this->hasPermission(['App\Http\Controllers\AttributeController@edit', 'App\Http\Controllers\AttributeController@destroy']),
                'orderable' => false, 'searchable' => false])

            ->parameters(dataTableOptions());
    }
}
