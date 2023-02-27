@extends('admin.layouts.app')
@section('page_title', __('Products'))
@section('css')
    <link rel="stylesheet" href="{{ asset('public/dist/css/product.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/datta-able/plugins/summer-note/summernote-lite.min.css') }}">
@endsection
@section('content')
    <!-- Main content -->
    <div class="col-sm-12 list-container" id="item-list-container">
        <div class="card">

            <div class="card-header d-md-flex justify-content-between align-items-center">
                <h5> {{ Route::current()->getName() == "product.pending" ? __('Pending Products') : __('Products') }} </h5>
                <div class="d-md-flex justify-content-end align-items-center">
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#batchDelete" class="btn btn-outline-primary mb-0 custom-btn-small d-none">
                        <span class="feather icon-trash-2 me-1"></span>
                        {{ __('Batch Delete') }} (<span class="batch-delete-count">0</span>)
                    </a>
                    <a href="{{ route('product.create') }}" class="btn mb-0 btn-outline-primary custom-btn-small">
                        <span class="fa fa-plus"> &nbsp;</span>{{ __('Add Product') }}
                    </a>
                    <button class="btn btn-outline-primary custom-btn-small mb-0 collapsed filterbtn me-0" type="button"
                        data-bs-toggle="collapse" data-bs-target="#filterPanel" aria-expanded="true"
                        aria-controls="filterPanel"><span class="fas fa-filter"> &nbsp;</span>{{ __('Filter') }}</button>
                </div>
            </div>

            <div class="card-header p-0 collapse" id="filterPanel">
                <div class="row mx-2 my-3">
                    <div class="col-md-2">
                        <select class="select2 filter" name="brand">
                            <option value="">{{ __('All Brands') }}</option>
                            @foreach ($productBrands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-2">
                        <select class="select2 filter" name="category">
                            <option value="">{{ __('All Categories') }}</option>
                            @foreach ($productCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-2">
                        <select class="select2 filter" name="vendor">
                            <option value="">{{ __('All :x', ['x' => __('Vendors')]) }}</option>
                            @foreach ($vendors as $vendor)
                                @if (optional($vendor->vendor)->name)
                                    <option value="{{ $vendor->vendor_id }}">{{ $vendor->vendor->name }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-2">
                        <select class="select2-hide-search filter" name="stock">
                            <option>{{ __('All Stock Status') }}</option>
                            <option value="instock">{{ __('In Stock') }}</option>
                            <option value="backorder">{{ __('On Backorder') }}</option>
                            <option value="outofstock">{{ __('Out Of Stock') }}</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <select class="select2-hide-search filter" name="status">
                            <option>{{ __('All Status') }}</option>
                            <option value="Published">{{ __('Published') }}</option>
                            <option value="Draft">{{ __('Draft') }}</option>
                            <option value="Pending Review">{{ __('Pending Review') }}</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="card-body product-table product-table-export-button px-4 need-batch-operation"
            data-namespace="\App\Models\Product" data-column="code">
                <div class="card-block pt-2 px-0">
                    <div class="col-sm-12">
                        @include('admin.layouts.includes.yajra-data-table')
                    </div>
                </div>
            </div>
            @include('admin.layouts.includes.delete-modal')
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('public/datta-able/plugins/summer-note/summernote-lite.min.js') }}"></script>
@endsection
