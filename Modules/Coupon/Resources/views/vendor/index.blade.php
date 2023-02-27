@extends('vendor.layouts.app')
@section('page_title', __('Coupons'))
@section('css')
    <link rel="stylesheet" href="{{ asset('public/dist/css/vendor-responsiveness.min.css') }}">
@endsection
@section('content')

<!-- Main content -->
<div class="list-container" id="vendor-coupon-list-container">
  <div class="card">
    <div class="card-header d-md-flex justify-content-between align-items-center">
      <h5><a href="{{ route('vendor.coupons') }}">{{ __('Coupons') }}</a></h5>
        <div class="mt-md-0 mt-2">
            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#batchDelete" class="btn btn-outline-primary mb-0 custom-btn-small d-none">
                <span class="feather icon-trash-2 me-1"></span>
                {{ __('Batch Delete') }} (<span class="batch-delete-count">0</span>)
            </a>
            @if (in_array('Modules\Coupon\Http\Controllers\Vendor\CouponController@create', $prms))
                <a href="{{ route('vendor.couponCreate') }}" class="btn btn-outline-primary custom-btn-small mb-0">
                    <span class="fa fa-plus"> &nbsp;</span>{{ __('Add Coupon') }}
                </a>
            @endif
            <button class="btn btn-outline-primary custom-btn-small collapsed filterbtn mb-0 me-0" type="button" data-bs-toggle="collapse" data-bs-target="#filterPanel" aria-expanded="true" aria-controls="filterPanel"><span class="fas fa-filter">&nbsp;</span>{{ __('Filter') }}</button>
        </div>
    </div>
    <div class="card-header p-0 collapse" id="filterPanel">
        <div class="row mx-2 my-3">
            <div class="col-md-3">
                <select class="select2-hide-search filter" name="status">
                    <option>{{ __('All Status') }}</option>
                    <option value="Active">{{ __('Active') }}</option>
                    <option value="Inactive">{{ __('Inactive') }}</option>
                    <option value="Expired">{{ __('Expired') }}</option>
                </select>
            </div>
        </div>
    </div>
    <div class="card-body px-4 table-field need-batch-operation"
        data-namespace="\Modules\Coupon\Http\Models\Coupon" data-column="id">
        <div class="card-block pt-2 px-0">
            <div class="col-sm-12">
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
    var pdf = "{{ (in_array('Modules\Coupon\Http\Controllers\Vendor\CouponController@pdf', $prms)) ? '1' : '0' }}";
    var csv = "{{ (in_array('Modules\Coupon\Http\Controllers\Vendor\CouponController@csv', $prms)) ? '1' : '0' }}";
</script>
<script src="{{ asset('public/datta-able/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('public/dist/js/custom/coupon.min.js') }}"></script>
<script src="{{ asset('public/dist/js/custom/permission.min.js') }}"></script>
@endsection
