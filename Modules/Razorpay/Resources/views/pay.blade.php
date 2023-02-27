@extends('gateway::layouts.payment')

@section('logo', asset(config('razorpay.logo')))

@section('gateway', config('razorpay.name'))

@section('content')
    <div class="straight-line"></div>
    @include('gateway::partial.instruction')
    <button id="rzp-button" type="submit" class="pay-button sub-btn">{{ __('Pay with Razorpay') }}</button>
    <script src="{{ asset('Modules/Razorpay/Resources/assets/js/checkout.min.js') }}"></script>

    <form name='razorpayform'
        action="{{ route('gateway.complete', withOldQueryIntegrity(['gateway' => config('razorpay.alias')])) }}"
        method="POST">
        @csrf
        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
        <input type="hidden" name="razorpay_signature" id="razorpay_signature">
    </form>
    <script>
        var options = {!! $data !!};
    </script>
    <script src="{{ asset('Modules/Razorpay/Resources/assets/js/index.min.js') }}"></script>
@endsection
