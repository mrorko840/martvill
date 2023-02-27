@extends('gateway::layouts.payment')

@section('logo', asset(config('checkpayments.logo')))

@section('gateway', config('checkpayments.name'))

@section('content')
    <div class="straight-line"></div>

    <div class="col-md-12">
        <h3 class="text-center my-4">{{ __('Check Payments') }}</h3>
        @include('gateway::partial.instruction')
    </div>
    <div class="col-md-12 p-4 payment-box align-center mt-2">
        <form
            action="{{ route('gateway.complete', withOldQueryIntegrity(['gateway' => config('checkpayments.alias')])) }}"
            method="post" id="payment-form">
            @csrf
            <button type="submit" class="pay-button sub-btn">
                <span>{{ __('Confirm') }}
            </button>
        </form>
    </div>
@endsection

@section('css')
@endsection
