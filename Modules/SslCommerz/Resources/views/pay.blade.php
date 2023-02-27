@extends('gateway::layouts.payment')

@section('logo', asset(config('sslcommerz.logo')))

@section('gateway', asset(config('sslcommerz.name')))

@section('content')
    <div class="straight-line"></div>
    @include('gateway::partial.instruction')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="order-md-1 ">
                <form method="POST" class="needs-validation pay-form" id="payment-form" novalidate>
                    <button class="pay-button sub-btn" id="sslczPayBtn" token={{ __('if you have any token validation') }}
                        postdata={{ __('your javascript arrays or objects which requires in backend') }}
                        order={{ __('If you already have the transaction generated for current order') }}
                        endpoint="{{ route('gateway.complete', withOldQueryIntegrity(['gateway' => config('sslcommerz.alias')])) }}">
                        {{ __('Pay Now') }}
                    </button>
                </form>
            </div>
        </div>
    @endsection

    @section('js')
        <script>
            'use strict';
            var obj = {};
            var url = '{{ $data->sandbox }}' == 1 ? "sandbox" : "seamless-epay";
        </script>
        <script src="{{ asset('Modules/SslCommerz/Resources/assets/js/ssl.min.js') }}"></script>
    @endsection
