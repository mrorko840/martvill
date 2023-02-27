@extends('vendor.layouts.app')
@section('page_title', __('Refunds'))
@section('css')
    <link rel="stylesheet" href="{{ asset('public/dist/css/vendor-responsiveness.min.css') }}">
@endsection
@section('content')

<!-- Main content -->
<div class="list-container" id="vendor-refund-list-container">
    <div class="card">
        <div class="card-header d-md-flex justify-content-between align-items-center">
            <h5>{{ __('Refunds') }}</h5>
            <div>
                <button class="btn btn-outline-primary custom-btn-small collapsed filterbtn mb-0 me-0" type="button" data-bs-toggle="collapse" data-bs-target="#filterPanel" aria-expanded="true" aria-controls="filterPanel"><span class="fas fa-filter">&nbsp;</span>{{ __('Filter') }}</button>
            </div>
        </div>

        <div class="card-header p-0 collapse" id="filterPanel">
            <div class="row mx-2 my-3">
                <div class="col-md-3">
                    <select class="select2-hide-search filter" name="status">
                        <option>{{ __('All Status') }}</option>
                        <option value="Opened">{{ __('Opened') }}</option>
                        <option value="In progress">{{ __('In progress') }}</option>
                        <option value="Accepted">{{ __('Accepted') }}</option>
                        <option value="Declined">{{ __('Declined') }}</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-body px-4 table-field">
            <div class="card-block pt-2 px-0">
                <div class="col-sm-12">
                    @include('vendor.layouts.includes.yajra-data-table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script type="text/javascript">
        'use strict';
        var pdf = "{{ (in_array('Modules\Refund\Http\Controllers\Vendor\RefundController@pdf', $prms)) ? '1' : '0' }}";
        var csv = "{{ (in_array('Modules\Refund\Http\Controllers\Vendor\RefundController@csv', $prms)) ? '1' : '0' }}";
    </script>
    <script src="{{ asset('public/dist/js/custom/permission.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/refund.min.js') }}"></script>
@endsection
