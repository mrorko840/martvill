@extends('admin.layouts.app')
@section('page_title', __('Withdrawal'))
@section('css')
    <link rel="stylesheet" href="{{ asset('public/dist/css/product.min.css') }}">
@endsection
@section('content')

<!-- Main content -->
<div class="col-sm-12 list-container" id="withdrawal-list-container">
    <div class="card">
        <div class="card-header d-md-flex justify-content-between align-items-center">
            <h5>{{ __('Withdrawals') }}</h5>
            <div class="mt-md-0 mt-2">
                <button class="btn btn-outline-primary custom-btn-small mb-0 me-0 collapsed filterbtn" type="button" data-bs-toggle="collapse" data-bs-target="#filterPanel" aria-expanded="true" aria-controls="filterPanel"><span class="fas fa-filter">&nbsp;</span>{{ __('Filter') }}</button>
            </div>
        </div>
        <div class="card-header p-0 collapse" id="filterPanel">
            <div class="row mx-2 my-3">
                <div class="col-md-3">
                    <select class="select2-hide-search filter" name="status">
                        <option>{{ __('All Status') }}</option>
                        <option value="Accepted">{{ __('Accepted') }}</option>
                        <option value="Rejected">{{ __('Rejected') }}</option>
                        <option value="Pending">{{ __('Pending') }}</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-body px-4 product-table">
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
    <script type="text/javascript">
        'use strict';
        var pdf = "{{ (in_array('App\Http\Controllers\WithdrawalController@pdf', $prms)) ? '1' : '0' }}";
        var csv = "{{ (in_array('App\Http\Controllers\WithdrawalController@csv', $prms)) ? '1' : '0' }}";
    </script>
    <script src="{{ asset('public/dist/js/custom/permission.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/withdrawal.min.js') }}"></script>
@endsection


