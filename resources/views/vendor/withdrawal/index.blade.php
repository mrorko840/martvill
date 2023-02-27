@extends('vendor.layouts.app')
@section('page_title', __('Withdrawal'))

@section('content')
    <!-- Main content -->
    <div class="list-container" id="vendor-withdrawal-container">

        <div class="card">
            <div class="card-header d-md-flex justify-content-between align-items-center">
                <h5>{{ __('Withdrawals History') }}</h5>
                <div class="mt-md-0 mt-2">
                    <a href="{{ route('vendorWithdrawal.setting') }}" class="btn btn-outline-primary mb-0 custom-btn-small">
                        <span class="fa fa-cog" aria-hidden="true">&nbsp;</span>
                        <span>{{ __('Setting') }}</span>
                    </a>
                    <a href="{{ route('vendorWithdrawal.money') }}" class="btn btn-outline-primary mb-0 me-0 custom-btn-small">
                        <span class="far fa-credit-card">&nbsp;</span>
                        <span>{{ __('Withdraw') }}</span>
                    </a>
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
        var pdf = "{{ (in_array('App\Http\Controllers\Vendor\WithdrawalController@pdf', $prms)) ? '1' : '0' }}";
        var csv = "{{ (in_array('App\Http\Controllers\Vendor\WithdrawalController@csv', $prms)) ? '1' : '0' }}";
    </script>
    <script src="{{ asset('public/dist/js/custom/permission.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/withdrawal.min.js') }}"></script>
@endsection
