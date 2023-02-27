@extends('gateway::layouts.payment')

@section('logo', asset(config('ngenius.logo')))
@section('gateway', config('ngenius.name'))

@section('content')
    <div class="straight-line"></div>
    @include('gateway::partial.instruction')
    <form action="{{ route('gateway.complete', withOldQueryIntegrity(['gateway' => config('ngenius.alias')])) }}"
        method="post" id="payment-form" class="pay-form">
        @csrf
        <button type="submit" class="pay-button sub-btn">
            <span>{{ __('Pay with N-Genius') }}
        </button>
    </form>
@endsection
