@extends('admin.layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('public/dist/css/user-list.min.css') }}">
@endsection
@section('page_title', __('Users'))
@section('content')
    <!-- Main content -->
    <div class="col-sm-12 list-container" id="user-list-container">
        <div class="card">
            <div class="card-header d-md-flex justify-content-between align-items-center">
                <h5> <a href="{{ Route::current()->getName() == "users.customer" ? route('users.customer').'?role=3' : route('users.index') }}">{{ Route::current()->getName() == "users.customer" ?  __('Customers') : __('Users') }}</a> </h5>
                <div class="d-md-flex mt-2 mt-md-0 justify-content-end align-items-center">
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#batchDelete" class="btn btn-outline-primary mb-0 custom-btn-small d-none">
                        <span class="feather icon-trash-2 me-1"></span>
                        {{ __('Batch Delete') }} (<span class="batch-delete-count">0</span>)
                    </a>
                    @if (in_array('App\Http\Controllers\UserController@create', $prms))
                        <a href="{{ route('users.create') }}" class="btn btn-outline-primary mb-0 custom-btn-small">
                            <span class="fa fa-plus"> &nbsp;</span>{{ __('Add User') }}
                        </a>
                    @endif
                    <button class="btn btn-outline-primary custom-btn-small mb-0 collapsed filterbtn me-0" type="button"
                        data-bs-toggle="collapse" data-bs-target="#filterPanel" aria-expanded="true"
                        aria-controls="filterPanel"><span class="fas fa-filter me-1"></span>{{ __('Filter') }}</button>
                </div>
            </div>

            <div class="card-header collapse p-0" id="filterPanel">
                <div class="row mx-2 my-2">
                    <div class="col-md-3">
                        <select class="select2-hide-search filter" name="role">
                            <option value="">{{ __('All Role') }}</option>
                            @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="select2-hide-search filter" name="status">
                            <option value="">{{ __('All Status') }}</option>
                            <option value="Pending">{{ __('Pending') }}</option>
                            <option value="Active">{{ __('Active') }}</option>
                            <option value="Inactive">{{ __('Inactive') }}</option>
                            <option value="Deleted">{{ __('Deleted') }}</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="card-body p-0 user-list-wallet user-list-processing-message need-batch-operation"
                data-namespace="\App\Models\User" data-column="id">
                <div class="card-block pt-2 px-2">
                    <div class="col-sm-12 form-tabs px-3">
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
        var pdf = "{{ in_array('App\Http\Controllers\UserController@pdf', $prms) ? '1' : '0' }}";
        var csv = "{{ in_array('App\Http\Controllers\UserController@csv', $prms) ? '1' : '0' }}";
    </script>

    <script src="{{ asset('public/dist/js/custom/permission.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/user.min.js') }}"></script>
@endsection
