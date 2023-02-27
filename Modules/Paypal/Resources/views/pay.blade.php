@extends('gateway::layouts.payment')

@section('logo', asset(config('paypal.logo')))
@section('gateway', config('paypal.name'))

@section('content')
    <div class="straight-line"></div>
    @include('gateway::partial.instruction')
    <form action="{{ route('gateway.complete', withOldQueryIntegrity(['gateway' => config('paypal.alias')])) }}"
        method="post" id="payment-form" class="pay-form">
        @csrf
        <button type="submit" class="pay-button sub-btn">
            <span>{{ __('Pay With Paypal') }}
        </button>
    </form>
@endsection
