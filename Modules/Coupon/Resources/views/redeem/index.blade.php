@extends('admin.layouts.app')
@section('page_title', __('Coupon Redeems'))
@section('css')
    <link rel="stylesheet" href="{{ asset('public/dist/css/marketing.min.css') }}">
@endsection
@section('content')

    <!-- Main content -->
    <div class="col-sm-12 list-container" id="coupon-redeem-list-container">
        <div class="card">
            <div class="card-header d-md-flex justify-content-between align-items-center">
                <h5><a href="{{ route('couponRedeem.index') }}">{{ __('Coupon Redeems') }}</a></h5>
                <div class="d-md-flex mt-2 mt-md-0">
                    <a href="{{ route('coupon.index') }}" class="btn btn-outline-primary mb-0 me-0 custom-btn-small"><span class="fas fa-arrow-left">&nbsp;</span>
                        {{ __('Back') }}
                    </a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="card-block pt-2 px-4 marketing-processing-table">
                    <div class="col-sm-12 form-tabs">
                        @include('admin.layouts.includes.yajra-data-table')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        'use strict';
        var pdf = "{{ in_array('Modules\Coupon\Http\Controllers\CouponRedeemController@pdf', $prms) ? '1' : '0' }}";
        var csv = "{{ in_array('Modules\Coupon\Http\Controllers\CouponRedeemController@csv', $prms) ? '1' : '0' }}";
    </script>
    <script src="{{ asset('public/dist/js/custom/coupon.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/permission.min.js') }}"></script>
@endsection
