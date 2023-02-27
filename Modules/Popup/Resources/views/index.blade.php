@extends('admin.layouts.app')
@section('page_title', __('Popups'))
@section('css')
    <link rel="stylesheet" href="{{ asset('public/dist/css/marketing.min.css') }}">
@endsection
@section('content')
    <!-- Main content -->
    <div class="col-sm-12 list-container" id="popup-list-container">
        <div class="card">
            <div class="card-header d-md-flex justify-content-between align-items-center">
                <h5>{{ __('Popups') }}</h5>
                <div class="d-md-flex mt-2 mt-md-0">
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#batchDelete" class="btn btn-outline-primary mb-0 custom-btn-small d-none">
                        <span class="feather icon-trash-2 me-1"></span>
                        {{ __('Batch Delete') }} (<span class="batch-delete-count">0</span>)
                    </a>
                    @if (in_array('Modules\Popup\Http\Controllers\PopupController@create', $prms))
                        <a href="{{ route('popup.create') }}" class="btn btn-outline-primary mb-0 custom-btn-small">
                            <span class="fa fa-plus"> &nbsp;</span>{{ __('Add Popup') }}
                        </a>
                    @endif
                    <button class="btn btn-outline-primary custom-btn-small mb-0 me-0 collapsed filterbtn" type="button"
                        data-bs-toggle="collapse" data-bs-target="#filterPanel" aria-expanded="true"
                        aria-controls="filterPanel"><span class="fas fa-filter">&nbsp;</span>{{ __('Filter') }}</button>
                </div>
            </div>
            <div class="card-header p-0 collapse" id="filterPanel">
                <div class="row mx-2 my-3">
                    <div class="col-md-3">
                        <select class="select2-hide-search filter" name="status">
                            <option>{{ __('All Status') }}</option>
                            <option value="Active">{{ __('Active') }}</option>
                            <option value="Inactive">{{ __('Inactive') }}</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="select2-hide-search filter" name="login_enabled">
                            <option>{{ __('Login required') . ': ' . __('All') }}</option>
                            <option value="1">{{ __('Login required') . ': ' . __('Yes') }}</option>
                            <option value="0">{{ __('Login required') . ': ' . __('No') }}</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-body px-4 need-batch-operation"
                data-namespace="\Modules\Popup\Entities\Popup" data-column="id">
                <div class="card-block pt-2 px-0 marketing-processing-table all-coupons-list-table">
                    <div class="col-sm-12 form-tabs">
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
        var pdf = 0;
        var csv = 0;
    </script>
    <script src="{{ asset('public/dist/js/custom/popup.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/permission.min.js') }}"></script>
@endsection
