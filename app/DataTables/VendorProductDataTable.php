<?php

/**
 * @package VendorProductDataTable
 * @author TechVillage <support@techvill.org>
 * @contributor Sakawat Hossain Rony <[sakawat.techvill@gmail.com]>
 * @contributor Md Abdur Rahaman Zihad <[zihad.techvill@gmail.com]>
 * @created 26-09-2021
 * @updated 27-08-2022
 */

namespace App\DataTables;

use App\Models\Product;
use App\DataTables\DataTable;

class VendorProductDataTable extends DataTable
{
    /*
    * DataTable Ajax
    *
    * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\DataTables
    */
    public function ajax()
    {
        $products = $this->query();

        return datatables()
            ->of($products)
            ->addColumn('image', function ($products) {
                return '<img src="' . $products->getFeaturedImage('small') . '" alt="' . __('image') . '" width="50" height="50">';
            })
            ->editColumn('name', function ($products) {
                $html = '<div class="meta-info-parent">
                        <a href="' . route('vendor.product.edit', ['code' => $products->code]) . '" title="' . $products->name . '">' . $products->name . '</a>' .
                    '<span class="d-block info-meta">
                            <span>Code: ' . $products->code . '</span>';
                if ($this->hasPermission(['App\Http\Controllers\Vendor\ProductController@edit'])) {
                    $html .= '<span class="hasbar"><a class="btn-link" href="' . route('vendor.product.edit', ['code' => $products->code]) . '">' . __("Edit") . '</a></span>';
                }

                $html .= '<span class="hasbar"><a class="btn-link" target="_blank" href="' . route('site.productDetails', ['slug' => $products->slug]) . '">' . __("Preview") . '</a></span>';
                if ($this->hasPermission(['App\Http\Controllers\Vendor\ProductController@deleteProduct'])) {
                    $html .=
                        '<span class="hasbar"><form method="post" action="' . route('vendor.product.destroy', ['code' => $products->code]) . '" id="delete-product-' . $products->code . '" accept-charset="UTF-8" class="display_inline">
                        ' . method_field('DELETE') . '
                        ' . csrf_field() . '
                        <span  title="' . __('Delete') . '" class="btn-link text-danger cursor-pointer confirm-delete" type="button" data-id=' . $products->code . ' data-delete="product" data-label="Delete" data-bs-toggle="modal" data-bs-target="#confirmDelete" data-title="' . __('Delete :x', ['x' => __('Product')]) . '" data-message="' . __('Are you sure to delete this?') . '">
                        ' . __("Trash") . '
                        </span>
                        </form>';
                    $html .= '</span></div></span>';
                }
                return $html;
            })
            ->editColumn('regular_price', function ($products) {
                return $products->getFormattedPrice() ?? '-';
            })

            ->editColumn('sku', function ($products) {
                return $products->sku ? wrapIt($products->sku, 10, ['columns' => 6]) : '-';
            })
            ->addColumn('category', function ($products) {
                $cat = wrapIt(optional($products->category->first())->name, 10, ['columns' => 6, 'trim' => true, 'trimLength' => 25]);
                return $cat ?? '-';
            })
            ->editColumn('stock', function ($products) {
                $status = $products->getStockStatus();

                $class = 'text-success';

                switch (strtolower($status)) {
                    case 'on backorder':
                        $class = 'text-warning';
                        break;
                    case 'out of stock':
                        $class = 'text-danger';
                        break;
                }

                return "<span class='$class'>" . __($status) . "</span>";
            })
            ->addColumn('brand', function ($products) {
                return $products->brand ? wrapIt(optional($products->brand)->name, 10, ['columns' => 6]) : '-';
            })
            ->editColumn('status', function ($products) {
                return statusBadges($products->status);
            })
            ->rawColumns(['image', 'name', 'status', 'vendor', 'stock'])
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        $vendorId = auth()->user()->vendor()->vendor_id;

        if (is_null($vendorId)) {
            return false;
        }

        $products = Product::select(['id', 'type', 'code', 'name',  'vendor_id', 'brand_id', 'status', 'regular_price', 'sku', 'parent_id', 'slug', 'manage_stocks', 'total_stocks',])
            ->with(['category', 'metadata', 'brand'])->where('vendor_id', $vendorId)->where('slug', '!=', null);
        return $this->applyScopes($products->filter());
    }

    /*
    * DataTable HTML
    *
    * @return \Yajra\DataTables\Html\Builder
    */
    public function html()
    {
        return $this->builder()
            ->addColumn(['data' => 'image', 'name' => 'image', 'title' => __(''), 'width' => '5%', 'orderable' => false, 'searchable' => false])
            ->addColumn(['data' => 'name', 'name' => 'name', 'title' => __('Name'), 'width' => '30%'])
            ->addColumn(['data' => 'regular_price', 'name' => 'regular_price', 'title' => __('Price')])
            ->addColumn(['data' => 'sku', 'name' => 'sku', 'title' => __('SKU')])
            ->addColumn(['data' => 'category', 'name' => 'category', 'title' => __('Category'), 'orderable' => false])
            ->addColumn(['data' => 'stock', 'name' => 'total_stocks', 'title' => __('Stock')])
            ->addColumn(['data' => 'brand', 'name' => 'brand', 'title' => __('Brand'), 'orderable' => false])
            ->addColumn(['data' => 'status', 'name' => 'status', 'title' => __('Status')])
            ->parameters(dataTableOptions());
    }
}
