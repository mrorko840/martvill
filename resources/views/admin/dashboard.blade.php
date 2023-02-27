@extends('admin.layouts.app')
@section('page_title', __('Dashboard'))
@section('css')
    <link rel="stylesheet" href="{{ asset('public/datta-able/fonts/material/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/dist/plugins/Responsive-2.2.5/css/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/dist/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/dist/css/custom.min.css') }}">
@endsection

@section('content')
    <!-- Main content -->
    <div class="col-sm-4">
        <a href="{{ route('transaction.index') }}" target="_blank">
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
                            <span class="d-block text-uppercase font-weight-600 c-gray-5">{{ __('Total sales') }} <small class="font-weight-600 c-gray-5">({{ __('last :x days', ['x' => 30]) }})</small></span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-4">
        <a href="{{ route('transaction.index') }}" target="_blank">
            <div class="card">
                <div class="card-block">
                    <div class="row d-flex align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-donate f-30 text-c-yellow rides-icon"></i>
                        </div>
                        <div class="col">
                            <h3 class="font-weight-500">{{ formatNumber($commissionThisMonth) }}
                                @include('admin.dashboxes.partials.compare', [
                                    'change' => $commissionThisMonthCompare,
                                ])
                            </h3>
                            <span class="d-block text-uppercase font-weight-600 c-gray-5">{{ __('Commission') }} <small class="font-weight-600 c-gray-5">({{ __('last :x days', ['x' => 30]) }})</small></span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-4">
        <a href="{{ route('order.index') }}" target="_blank">
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
                            <span class="d-block text-uppercase font-weight-600 c-gray-5">{{ __('Orders') }} <small class="font-weight-600 c-gray-5">({{ __('last :x days', ['x' => 30]) }})</small></span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-4">
        <a href="{{ route('refund.index') }}" target="_blank">
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
                            <span class="d-block text-uppercase font-weight-600 c-gray-5">{{ __('Refund Requests') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-4">
        <a href="{{ route('product.index') }}" target="_blank">
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
                            <span class="d-block text-uppercase font-weight-600 c-gray-5">{{ __("Products") }} <small class="font-weight-600 c-gray-5">({{ __('last :x days', ['x' => 30]) }})</small></span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-4">
        <a href="{{ route('vendors.index') }}" target="_blank">
            <div class="card">
                <div class="card-block">
                    <div class="row d-flex align-items-center">
                        <div class="col-auto">
                            <i class="feather icon-home f-30 text-c-yellow rides-icon"></i>
                        </div>
                        <div class="col">
                            <h3 class="font-weight-500">{{ $newVendors }}
                                @include('admin.dashboxes.partials.compare', [
                                    'change' => $newVendorsCompare,
                                ])
                            </h3>
                            <span class="d-block text-uppercase font-weight-600 c-gray-5">{{ __("Vendors") }} <small class="font-weight-600 c-gray-5">({{ __('last :x days', ['x' => 30]) }})</small></span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-4">
        <a href="{{ route('users.index') }}" target="_blank">
            <div class="card">
                <div class="card-block">
                    <div class="row d-flex align-items-center">
                        <div class="col-auto">
                            <i class="feather icon-user-plus f-30 text-c-yellow rides-icon"></i>
                        </div>
                        <div class="col">
                            <h3 class="font-weight-500">{{ $newUsers }}
                                @include('admin.dashboxes.partials.compare', [
                                    'change' => $newUsersCompare,
                                ])
                            </h3>
                            <span class="d-block text-uppercase font-weight-600 c-gray-5">{{ __("Users") }} <small class="font-weight-600 c-gray-5">({{ __('last :x days', ['x' => 30]) }})</small></span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-4">
        <a href="{{ route('admin.tickets', ['thread_status' => 'open']) }}" target="_blank">
            <div class="card">
                <div class="card-block">
                    <div class="row d-flex align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-ticket-alt f-30 text-c-yellow"></i>
                        </div>
                        <div class="col">
                            <h3 class="font-weight-500">{{ $openTicketCount }}</h3>
                            <span class="d-block text-uppercase font-weight-600 c-gray-5">{{ __('Open Tickets') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-4">
        <a href="{{ route('withdrawal.index', ['status' => 'Pending']) }}" target="_blank">
            <div class="card">
                <div class="card-block">
                    <div class="row d-flex align-items-center">
                        <div class="col-auto">
                            <i class="feather icon-share f-30 text-c-yellow"></i>
                        </div>
                        <div class="col">
                            <h3 class="font-weight-500">{{ $withdrawalRequestCount }}</h3>
                            <span class="d-block text-uppercase font-weight-600 c-gray-5">
                                {{ __("Withdrawal Request") }}
                                <small class="font-weight-600 c-gray-5">({{ __('Pending') }})</small>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-8"></div>

    <div class="col-md-5">
        @include('admin.dashboxes.donut-chart')
    </div>

    <div class="col-md-7">
        @include('admin.dashboxes.heatmap')
    </div>

    <div class="col-md-6">
        @include('admin.dashboxes.vendor-stats')
    </div>
    <div class="col-md-6">
        @include('admin.dashboxes.vendor-request')
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
@endsection

@section('js')
    <script>
        const localeString = "{{ app()->getLocale() }}";
        const mostSoldProductsUrl = "{{ route('dashboard.most-sold-products') }}";
        const mostActiveUsersUrl = "{{ route('dashboard.most-active-users') }}";
        const vendorStatsUrl = "{{ route('dashboard.vendor-stats') }}";
        const vendorStatsUrlDaily = "{{ route('dashboard.vendor-stats-type','daily') }}";
        const vendorStatsUrlWeekly = "{{ route('dashboard.vendor-stats-type','weekly') }}";
        const vendorStatsUrlMonthly = "{{ route('dashboard.vendor-stats-type','monthly') }}";
        const vendorStatsUrlYearly = "{{ route('dashboard.vendor-stats-type','yearly') }}";
        const salesOfThisMonth = "{{ route('dashboard.sales-of-this-month') }}";
        const vendorEdiUrl = "{{ route('vendors.edit', ['id' => '__id__']) }}";
        const vendorReqsUrl = "{{ route('dashboard.vendor-req') }}";
    </script>

    <script src="{{ asset('public/dist/plugins/DataTables-1.10.21/js/jquery.dataTablesCus.min.js') }}"></script>
    <script src="{{ asset('public/dist/plugins/Responsive-2.2.5/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/moment.min.js') }}"></script>
    <script src="{{ asset('public/dist/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('public/datta-able/plugins/chart-chartjs/js/Chart-2019.min.js') }}"></script>
    <script src="{{ asset('public/datta-able/plugins/sweetalert/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/dashboard.min.js') }}"></script>
@endsection
