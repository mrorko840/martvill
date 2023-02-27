@extends('admin.layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('public/dist/css/user-activity-list.min.css') }}">
@endsection
@section('page_title', __('Users Activity'))

<!-- Main content -->
@section('content')
<div class="col-sm-12 list-container" id="activity-list-container">
    <div class="card">
        <div class="card-header d-md-flex justify-content-between align-items-center">
            <h5> <a href="{{ route('users.activity') }}">{{ __('Users Activity') }}</a> </h5>
            <div class="d-md-flex mt-2 mt-md-0 justify-content-end align-items-center">
                <button class="btn btn-outline-primary custom-btn-small mb-0 collapsed filterbtn me-0" type="button" data-bs-toggle="collapse" data-bs-target="#filterPanel" aria-expanded="true" aria-controls="filterPanel">
                    <span class="fas fa-filter"></span>{{ __('Filter') }}
                </button>
            </div>
        </div>

        <div class="card-header collapse p-0" id="filterPanel">
            <div class="row mx-2 my-2">
                <div class="col-md-3 d-flex align-items-center">
                    <select class="select2 filter ajax_users" name="userId">
                        <option value="">{{ __('All Users') }}</option>
                    </select>
                </div>
                <div class="col-md-3 d-flex text-nowrap align-items-center">
                    <select class="select2 filter" name="log_name">
                        <option value="">{{ __('All Types') }}</option>
                        @foreach ($logTypes as $logType)
                        <option value="{{ $logType }}">{{ $logType }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="card-body p-0 user_activity_list">
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
    var searchURI = "{{ route('find.users.ajax') }}";
</script>
<script src="{{ asset('public/dist/js/custom/users-activity-list.min.js') }}"></script>
@endsection
