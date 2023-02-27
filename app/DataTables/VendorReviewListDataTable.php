<?php
/**
 * @package VendorReviewListDataTable
 * @author TechVillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 19-12-2021
 */

namespace App\DataTables;

use App\DataTables\DataTable;
use App\Models\Review;

class VendorReviewListDataTable extends DataTable
{
    /*
    * DataTable Ajax
    *
    * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\DataTables
    */
    public function ajax()
    {
        $reviews = $this->query();
        return datatables()
            ->of($reviews)
            ->editColumn('product.name', function ($reviews) {
                return wrapIt(optional($reviews->product)->name, 10, ['columns' => 3]);
            })
            ->editColumn('comments', function ($reviews) {
                return wrapIt($reviews->comments, 10, ['columns' => 3]);
            })
            ->editColumn('user', function ($reviews) {
                return wrapIt(optional($reviews->user)->name, 10, ['columns' => 3]) ;
            })
            ->editColumn('status', function ($reviews) {
                return statusBadges(lcfirst($reviews->status));
            })
            ->addColumn('created_at', function ($reviews) {
                return timeZoneFormatDate($reviews->created_at);
            })
            ->addColumn('action', function ($reviews) {
                $edit = '<a title="' . __('Edit') . '" href="' . route('vendor.reviewEdit', ['id' => $reviews->id]) .'" class="btn btn-xs btn-primary edit_review" data-bs-toggle="modal" data-bs-target="#edit-review" data-id=' . $reviews->id . '><i class="feather icon-edit"></i></a>&nbsp;';

                $view = '<a title="' . __('Show') . '" href="' . route('vendor.reviewView', ['id' => $reviews->id]) . '" class="btn btn-xs btn-outline-dark"><i class="feather icon-eye"></i></a>&nbsp;';

                $delete = '<form method="post" action="' . route('vendor.reviewDestroy', ['id' => $reviews->id]) .'" id="delete-review-'. $reviews->id . '" accept-charset="UTF-8" class="display_inline">
                        ' . csrf_field() . '
                        <button title="' . __('Delete') . '" class="btn btn-xs btn-danger confirm-delete" type="button" data-id=' . $reviews->id . ' data-delete="review" data-label="Delete" data-bs-toggle="modal" data-bs-target="#confirmDelete" data-title="' . __('Delete :x', ['x' => __('Review')]) . '" data-message="' . __('Are you sure to delete this?') . '">
                        <i class="feather icon-trash-2"></i>
                        </button>
                        </form>';

                $str = '';
                if ($this->hasPermission(['App\Http\Controllers\Vendor\ReviewController@view'])) {
                    $str .= $view;
                }
                if ($this->hasPermission(['App\Http\Controllers\Vendor\ReviewController@edit'])) {
                    $str .= $edit;
                }
                if ($this->hasPermission(['App\Http\Controllers\Vendor\ReviewController@destroy'])) {
                    $str .= $delete;
                }
                return $str;
            })

            ->rawColumns(['comments', 'product.name', 'user', 'status', 'created_at', 'action'])
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        $reviews = Review::select('reviews.id', 'comments', 'product_id', 'user_id', 'rating', 'reviews.status')->whereHas('product', function ($query) {
                $query->where('vendor_id', auth()->user()->vendor()->vendor_id);
        })->with(['product:id,name', 'user:id,name'])->filter();

        return $this->applyScopes($reviews);
    }

    /*
    * DataTable HTML
    *
    * @return \Yajra\DataTables\Html\Builder
    */
    public function html()
    {
        return $this->builder()
            ->addColumn(['data' => 'comments', 'name' => 'comments', 'title' => __('Comments')])
            ->addColumn(['data' => 'product.name', 'name' => 'product.name', 'title' => __('Product')])
            ->addColumn(['data' => 'user', 'name' => 'user.name', 'title' => __('Customer')])
            ->addColumn(['data' => 'rating', 'name' => 'rating', 'title' => __('Rating')])
            ->addColumn(['data' => 'status', 'name' => 'status', 'title' => __('Status')])
            ->addColumn(['data' => 'created_at', 'name' => 'created_at', 'title' => __('Created')])
            ->addColumn(['data'=> 'action', 'name' => 'action', 'title' => __('Action'), 'width' => '12%',
                'visible' => $this->hasPermission(['App\Http\Controllers\Vendor\ReviewController@edit', 'App\Http\Controllers\Vendor\ReviewController@show', 'App\Http\Controllers\Vendor\ReviewController@destroy']),
                'orderable' => false, 'searchable' => false])
            ->parameters(dataTableOptions());
    }
}
