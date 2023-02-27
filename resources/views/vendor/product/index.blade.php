@extends('vendor.layouts.app')
@section('page_title', __('Products'))
@section('css')
    <link rel="stylesheet" href="{{ asset('public/dist/css/product.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/dist/css/vendor-responsiveness.min.css') }}">
@endsection
@section('content')
    @php
        $isAdmin = false;
    @endphp
    <!-- Main content -->
    <div id="vendor-item-list-container">
        <div class="card">
            <div class="card-header d-md-flex justify-content-between align-items-center">
                <h5>{{ __('Products') }}</h5>
                <div class="mt-md-0 mt-2">
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#batchDelete" class="btn btn-outline-primary mb-0 custom-btn-small d-none">
                        <span class="feather icon-trash-2 me-1"></span>
                        {{ __('Batch Delete') }} (<span class="batch-delete-count">0</span>)
                    </a>
                    <a href="{{ route('vendor.product.create') }}" class="btn btn-outline-primary custom-btn-small mb-0">
                        <span class="fa fa-plus"> &nbsp;</span>{{ __('Add Product') }}
                    </a>
                    <button class="btn btn-outline-primary custom-btn-small collapsed filterbtn mb-0 me-0" type="button"
                        data-bs-toggle="collapse" data-bs-target="#filterPanel" aria-expanded="true"
                        aria-controls="filterPanel"><span class="fas fa-filter">&nbsp;</span>{{ __('Filter') }}</button>
                </div>
            </div>

            <div class="card-header p-0 collapse" id="filterPanel">
                <div class="row mx-2 my-3">
                    <div class="col-md-3">
                        <select class="select2default filter filter-drop-down" name="brand">
                            <option value="">{{ __('All Brands') }}</option>
                            @foreach ($productBrands as $brand)
                                <option value="{{ $brand->id }}">
                                    {{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-3">
                        <select class="select2default filter filter-drop-down" name="category">
                            <option value="">{{ __('All Categories') }}</option>
                            @foreach ($productCategories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-3">
                        <select class="select2-hide-search filter filter-drop-down" name="stock">
                            <option>{{ __('All Stock Status') }}</option>
                            <option value="instock">{{ __('In Stock') }}</option>
                            <option value="backorder">{{ __('On Backorder') }}</option>
                            <option value="outofstock">{{ __('Out Of Stock') }}</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <select class="select2-hide-search filter" name="status">
                            <option>{{ __('All Status') }}</option>
                            <option value="Published">{{ __('Published') }}</option>
                            <option value="Draft">{{ __('Draft') }}</option>
                            <option value="Pending Review">{{ __('Pending Review') }}</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-body px-4 table-field exportButton need-batch-operation"
                data-namespace="\App\Models\Product" data-column="code">
                <div class="card-block pt-2 px-0">
                    <div class="col-sm-12 vendor-product-table">
                        @include('vendor.layouts.includes.yajra-data-table')
                    </div>
                </div>
            </div>
            @include('vendor.layouts.includes.delete-modal')
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        'use strict';
        var pdf = "{{ in_array('App\Http\Controllers\Vendor\ProductController@pdf', $prms) ? '1' : '0' }}";
        var csv = "{{ in_array('App\Http\Controllers\Vendor\ProductController@csv', $prms) ? '1' : '0' }}";
    </script>
    <script src="{{ asset('public/dist/js/custom/permission.min.js') }}"></script>
@endsection
