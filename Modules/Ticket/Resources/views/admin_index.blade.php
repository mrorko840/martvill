@extends('admin.layouts.app')
@section('page_title', __('Supports'))
@section('css')
    <link rel="stylesheet" href="{{ asset('public/dist/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Modules/Ticket/Resources/assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/dist/css/product.min.css') }}">
@endsection
@section('content')
    <!-- Main content -->
    <div class="col-sm-12 list-container" id="ticket-list-container">
        <div class="card">
            <div class="card-header d-md-flex justify-content-between align-items-center">
                <h5><a href="{{ route('admin.tickets') }}">{{ __('Supports') }}</a></h5>
                <div class="d-md-flex mt-2 mt-md-0">
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#batchDelete" class="btn btn-outline-primary mb-0 custom-btn-small d-none">
                        <span class="feather icon-trash-2 me-1"></span>
                        {{ __('Batch Delete') }} (<span class="batch-delete-count">0</span>)
                    </a>
                    @if (in_array('Modules\Ticket\Http\Controllers\TicketController@add', $prms))
                        <a href="{{ route('admin.threadAdd') }}" class="btn btn-outline-primary my-0 custom-btn-small">
                            <span class="fa fa-plus"> &nbsp;</span>{{ __('Add Ticket') }}
                        </a>
                    @endif
                    <button class="btn btn-outline-primary m-0 custom-btn-small collapsed filterbtn" type="button" data-bs-toggle="collapse" data-bs-target="#filterPanel" aria-expanded="true" aria-controls="filterPanel"><span class="fas fa-filter">&nbsp;</span>{{ __('Filter') }}</button>
                </div>
            </div>
            <div class="card-header collapse p-0" id="filterPanel">
                <div class="row mx-2 my-2">
                    <div class="col-md-3">
                        <div class="input-group">
                            <button type="button" class="form-control date-drop-down" id="daterange-btn">
                                <span class="float-left"><i class="fa fa-calendar"></i> {{ __('Date range picker') }}</span>
                                <i class="fa fa-caret-down float-right pt-1"></i>
                            </button>
                        </div>
                    </div>

                    <input class="form-control" id="startfrom" type="hidden" name="from">
                    <input class="form-control" id="endto" type="hidden" name="to">
                    <select class="filter display-none" name="start_date" id="start_date"></select>
                    <select class="filter display-none" name="end_date" id="end_date"></select>

                  <div class="col-md-3">
                    <select class="form-control select2 filter" name="assignee" id="ticket-assignee">
                        <option value="">{{ __('All Assignee') }}</option>
                        @if (!empty($assignees))
                            @foreach ($assignees as $assignee)
                                <option value="{{ $assignee->id }}"
                                    {{ $assignee->id == $allassignee ? ' selected="selected"' : '' }}>
                                    {{ $assignee->name }}</option>
                            @endforeach
                        @endif
                    </select>
                  </div>
                  <div class="col-md-3">
                    <select class="form-control select2-hide-search filter" name="department" id="department_id">
                        <option value="">{{ __('All Department') }}</option>
                        @foreach ($departments as $data)
                            <option value="{{ $data->id }}"
                                {{ $data->id == $alldepartment ? ' selected="selected"' : '' }}>
                                {{ $data->name }}</option>
                        @endforeach
                    </select>
                  </div>
                 <div class="col-md-3">
                    <select class="select2-hide-search filter" name="status" id="status">
                        <option value="">{{ __('All Status') }}</option>
                        @foreach ($status as $data)
                            <option value="{{ $data->id }}"
                                {{ $data->id == $allstatus ? ' selected="selected"' : '' }}>
                                {{ $data->name }}</option>
                        @endforeach
                    </select>
                </div>
                </div>
            </div>
            <div class="card-body p-0 product-table need-batch-operation"
                data-namespace="\Modules\Ticket\Http\Models\Thread" data-column="id">
                <div class="card-block pt-2 px-2">
                    <div class="col-sm-12 ticket-information px-3">
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
    var startDate = "{!! isset($from) ? $from : 'undefined' !!}";
    var endDate = "{!! isset($to) ? $to : 'undefined' !!}";
    </script>
     <script src="{{ asset('public/datta-able/plugins/sweetalert/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/moment.min.js') }}"></script>
    <script src="{{ asset('public/dist/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('Modules/Ticket/Resources/assets/js/customerpanel.min.js') }}"></script>
    <script src="{{ asset('Modules/Ticket/Resources/assets/js/message.min.js') }}"></script>
@endsection
