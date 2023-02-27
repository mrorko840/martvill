<?php
/**
 * @package BlogCategoryDataTable
 * @author TechVillage <support@techvill.org>
 * @contributor Kabir Ahmed <[kabir.techvill@gmail.com]>
 * @created 29-12-2021
 */

namespace Modules\Blog\DataTables;

use App\DataTables\DataTable;
use Modules\Blog\Http\Models\BlogCategory;

class BlogCategoryDataTable extends DataTable
{
    /*
    * DataTable Ajax
    *
    * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\DataTables
    */
    public function ajax()
    {
        $category = $this->query();
        return datatables()
            ->of($category)

            ->editColumn('name', function ($category) {
                return wrapIt(ucfirst($category->name), 30);
            })->editColumn('status', function ($category) {
                return statusBadges(lcfirst($category->status));
            })->editColumn('created_at', function ($category) {
                return $category->format_created_at;
            })->addColumn('action', function ($category) {
                $edit = '<a title="' . __('Edit :x', ['x' => __('Category')]) . '" href="javascript:void(0) " class="btn btn-xs btn-primary edit-blog-category" data-bs-toggle="modal" data-bs-target="#edit-payment" id="'. $category->id .'" name="'. $category->name .'" status="'. $category->status .'"><i class="feather icon-edit edit-blog-category"></i></a>&nbsp';

                $delete = '<form method="post" action="' . route('blog.category.delete', ['id' => $category->id]) . '" id="delete-Category-'. $category->id . '" accept-charset="UTF-8" class="display_inline">
                        ' . csrf_field() . '
                        <button title="' . __('Delete :x', ['x' => __('Category.')]) . '" class="btn btn-xs btn-danger confirm-delete" type="button" data-id=' . $category->id . ' data-label="Delete" data-delete="Category" data-bs-toggle="modal" data-bs-target="#confirmDelete" data-title="' . __('Delete :x', ['x' => __('Category')]) . '" data-message="' . __('Are you sure to delete this?') . '">
                        <i class="feather icon-trash-2"></i>
                        </button>
                        </form>';
                $str = '';
                if ($this->hasPermission(['Modules\Blog\Http\Controllers\BlogCategoryController@update'])) {
                    $str .= $edit;
                }
                if ($this->hasPermission(['Modules\Blog\Http\Controllers\BlogCategoryController@delete']) && $category->id != 1) {
                    $str .= $delete;
                }
                return $str;
            })

            ->rawColumns(['name', 'status', 'action'])
            ->filter(function ($instance){
                if (request('status') && (request('status') == 'Active' || request('status') == 'Inactive' )) {
                    $instance->where('status', request('status'));
                }
                if (request('category_id')) {
                    $instance->where('id', request('category_id'));
                }
                if (isset(request('search')['value'])) {
                    $keyword = xss_clean(request('search')['value']);
                    if (!empty($keyword)) {
                        $instance->where(function ($query) use ($keyword) {
                            $query->Where('name', 'like', '%' . $keyword . '%');
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
        $category = BlogCategory::getAllBlogCategory();
        return $this->applyScopes($category);
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
        ->addColumn(['data' => 'status', 'name' => 'status', 'title' => __('Status'),'orderable' => false, 'searchable' => false])
        ->addColumn(['data' => 'created_at', 'name' => 'created_at', 'title' => __('Created At')])
        ->addColumn(['data'=> 'action', 'name' => 'action', 'title' => __('Action'), 'width' => '10%',
        'visible' => $this->hasPermission(['Modules\Blog\Http\Controllers\BlogCategoryController@edit', 'Modules\Blog\Http\Controllers\BlogCategoryController@delete']),
        'orderable' => false, 'searchable' => false])
        ->parameters(dataTableOptions());
    }
}
