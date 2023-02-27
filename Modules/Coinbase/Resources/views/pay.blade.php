@extends('gateway::layouts.payment')

@section('content')
    @include('gateway::partial.instruction')
    <form action="{{ route('gateway.complete', ['gateway' => config('coinbase.alias'), 'key' => $purchaseData->code]) }}"
        method="post" id="payment-form" class="pay-form">
        @csrf
        <button type="submit" class="pay-button sub-btn">{{ __('Pay With Coinbase') }}</button>
    </form>
@endsection
