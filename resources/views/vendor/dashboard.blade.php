@extends('vendor.layouts.app')
@section('page_title', __('Dashboard'))
@section('css')
    <link rel="stylesheet" href="{{ asset('public/datta-able/fonts/material/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/dist/plugins/Responsive-2.2.5/css/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/dist/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/dist/css/custom.min.css') }}">
@endsection

@section('content')
    <!-- Main content -->
    <div class="row" id="vendor_dashboard_container">
        {{-- Wallet --}}
        @foreach ($walletBalances as $wallet)
            <div class="col-sm-4">
                <a href="{{ route('vendorTransaction.index') }}" target="_blank">
                    <div class="card">
                        <div class="card-block">
                            <div class="row d-flex align-items-center">
                                <div class="col-auto">
                                    <span class="wallet-symbol f-30 text-c-yellow">{{ $wallet->currency->symbol }}</span>
                                </div>
                                <div class="col">
                                    <h3 class="font-weight-500">
                                        {{ $wallet->currency->name }}
                                    </h3>
                                    <span class="d-block text-uppercase font-weight-600 c-gray-5">
                                        {{ formatCurrencyAmount($wallet->balance) }}
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

        {{-- Total Sale --}}
        <div class="col-sm-4">
            <a href="{{ route('vendorTransaction.index') }}" target="_blank">
                <div class="card">
                    <div class="card-block">
                        <div class="row d-flex align-items-center">
                            <div class="col-auto">
                                <i class="feather icon-stop-circle f-30 text-c-yellow"></i>
                            </div>
                            <div class="col">
                                <h3 class="font-weight-500">{{ formatNumber($thisMonthSales) }}
                                    @include('admin.dashboxes.partials.compare', [
                                        'change' => $thisMonthSalesCompare,
                                    ])
                                </h3>
                                <span class="d-block text-uppercase font-weight-600 c-gray-5">{{ __('Total sales') }}
                                    <small>({{ __('last :x days', ['x' => 30]) }})</small></span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        {{-- Order --}}
        <div class="col-sm-4">
            <a href="{{ route('vendorOrder.index') }}" target="_blank">
                <div class="card">
                    <div class="card-block">
                        <div class="row d-flex align-items-center">
                            <div class="col-auto">
                                <i class="feather icon-shopping-cart f-30 text-c-yellow"></i>
                            </div>
                            <div class="col">
                                <h3 class="font-weight-500">{{ $thisMonthOrdersCount }}
                                    @include('admin.dashboxes.partials.compare', [
                                        'change' => $thisMonthOrdersCompare,
                                    ])

                                </h3>
                                <span class="d-block text-uppercase font-weight-600 c-gray-5">{{ __('Orders') }}
                                    <small>({{ __('last :x days', ['x' => 30]) }})</small></span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        {{-- Refund --}}
        <div class="col-sm-4">
            <a href="{{ route('vendor.refund.index') }}" target="_blank">
                <div class="card">
                    <div class="card-block">
                        <div class="row d-flex align-items-center">
                            <div class="col-auto">
                                <i class="feather icon-repeat f-30 text-c-yellow rides-icon"></i>
                            </div>
                            <div class="col">
                                <h3 class="font-weight-500">{{ $newRefunds }}
                                    @include('admin.dashboxes.partials.compare', [
                                        'change' => $newRefundsCompare,
                                    ])</h3>
                                <span
                                    class="d-block text-uppercase font-weight-600 c-gray-5">{{ __('Refund Requests') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        {{-- Product --}}
        <div class="col-sm-4">
            <a href="{{ route('vendor.products') }}" target="_blank">
                <div class="card">
                    <div class="card-block">
                        <div class="row d-flex align-items-center">
                            <div class="col-auto">
                                <i class="feather icon-package f-30 text-c-yellow"></i>
                            </div>
                            <div class="col">
                                <h3 class="font-weight-500">{{ $newProducts }}
                                    @include('admin.dashboxes.partials.compare', [
                                        'change' => $newProductsCompare,
                                    ])
                                </h3>
                                <span class="d-block text-uppercase font-weight-600 c-gray-5">{{ __('products') }}
                                    <small>({{ __('last :x days', ['x' => 30]) }})</small></span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        {{-- Rating --}}
        <div class="col-sm-4">
            <a href="{{ route('vendor.reviews') }}" target="_blank">
                <div class="card">
                    <div class="card-block">
                        <div class="row d-flex align-items-center">
                            <div class="col-auto">
                                <i class="feather icon-package f-30 text-c-yellow"></i>
                            </div>
                            <div class="col">
                                <h3 class="font-weight-500">{{ $newReviews }}
                                    @include('admin.dashboxes.partials.compare', [
                                        'change' => $newReviewsCompare,
                                    ])
                                </h3>
                                <span class="d-block text-uppercase font-weight-600 c-gray-5">{{ __('Ratings') }}
                                    <small>({{ __('last :x days', ['x' => 30]) }})</small></span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            @include('admin.dashboxes.heatmap')
        </div>

        <div class="col-md-6">
            @include('admin.dashboxes.donut-chart')
        </div>

        <div class="col-md-4">
            @include('admin.dashboxes.most-sold-products')
        </div>
        <div class="col-md-4">
            @include('admin.dashboxes.most-sold-brands')
        </div>
        <div class="col-md-4">
            @include('admin.dashboxes.most-active-users')
        </div>
    </div>
    </div>
    </div>
@endsection
@section('js')
    <script>
        'use strict';
        const localeString = "{{ app()->getLocale() }}";
        const mostSoldProductsUrl = "{{ route('vendor.dashboard.most-sold-products') }}";
        const mostActiveUsersUrl = "{{ route('vendor.dashboard.most-active-users') }}";
        const vendorStatsUrl = "{{ route('vendor.dashboard.vendor-stats') }}";
        const salesOfThisMonth = "{{ route('vendor.dashboard.sales-of-this-month') }}";
        const vendorEdiUrl = "{{ route('vendors.edit', ['id' => '__id__']) }}";
    </script>

    <script src="{{ asset('public/dist/plugins/DataTables-1.10.21/js/jquery.dataTablesCus.min.js') }}"></script>
    <script src="{{ asset('public/dist/plugins/Responsive-2.2.5/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/moment.min.js') }}"></script>
    <script src="{{ asset('public/dist/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('public/datta-able/plugins/chart-chartjs/js/Chart-2019.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/dashboard.min.js') }}"></script>
@endsection
