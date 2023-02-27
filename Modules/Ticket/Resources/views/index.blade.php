@extends('vendor.layouts.app')
@section('page_title', __('Supports'))
@section('css')
  <link rel="stylesheet" href="{{ asset('public/dist/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('Modules/Ticket/Resources/assets/css/style.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/dist/css/vendor-responsiveness.min.css') }}">
@endsection

@section('content')

<!-- Main content -->
<div class="list-container" id="vendor-ticket-list-container">
  <div class="card">
    <div class="card-header d-md-flex justify-content-between align-items-center">
      <h5><a href="{{ route('vendor.threads') }}">{{ __('Supports') }}</a></h5>
      <div class="mt-md-0 mt-2">
        @if (in_array('Modules\Ticket\Http\Controllers\Vendor\TicketController@create', $prms))
            <a href="{{ route('vendor.threadAdd') }}" class="btn btn-outline-primary mb-0 custom-btn-small">
                <span class="fa fa-plus"> &nbsp;</span>{{ __('Add Ticket') }}
            </a>
        @endif
        <button class="btn btn-outline-primary custom-btn-small collapsed filterbtn mb-0 me-0" type="button" data-bs-toggle="collapse" data-bs-target="#filterPanel" aria-expanded="true" aria-controls="filterPanel"><span class="fas fa-filter">&nbsp;</span>{{ __('Filter') }}</button>
    </div>
    </div>
    <div class="card-header collapse p-0" id="filterPanel">
      <div class="row mx-2 my-2">
          <div class="col-md-3">
              <div class="input-group">
                  <button type="button" class="form-control inputFieldDesign" id="daterange-btn">
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
          <select class="form-control select2-hide-search filter" name="department" id="department_id">
              <option value="">{{ __('All Department') }}</option>
              @foreach ($departments as $data)
                  <option value="{{ $data->id }}"
                      {{ $data->id == $department_id ? ' selected="selected"' : '' }}>
                      {{ $data->name }}</option>
              @endforeach
          </select>
        </div>
       <div class="col-md-3">
          <select class="form-control select2-hide-search filter" name="status" id="status">
              <option value="">{{ __('All Status') }}</option>
              @foreach ($statuses as $data)
                  <option value="{{ $data->id }}"
                      {{ $data->id == $status_id ? ' selected="selected"' : '' }}>
                      {{ $data->name }}</option>
              @endforeach
          </select>
        </div>
      </div>
    </div>
    <div class="card-body px-4 table-field">
      <div class="card-block pt-2 px-0">
        <div class="col-sm-12 ticket-information">
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
<script src="{{ asset('public/dist/js/moment.min.js') }}"></script>
<script src="{{ asset('public/dist/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}"></script>
<script src="{{ asset('Modules/Ticket/Resources/assets/js/message.min.js') }}"></script>
@endsection

