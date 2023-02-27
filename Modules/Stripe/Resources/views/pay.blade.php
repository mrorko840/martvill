@extends('gateway::layouts.payment')

@section('logo', asset(config('stripe.logo')))

@section('gateway', config('stripe.name'))

@section('content')
    <p class="para-6">{{ __('Fill in the required information') }}</p>
    <div class="straight-line"></div>

    @include('gateway::partial.instruction')

    <form class="pay-form needs-validation"
        action="{{ route('gateway.complete', withOldQueryIntegrity(['gateway' => config('stripe.alias')])) }}" method="post"
        id="payment-form">
        @csrf
        <div>
            <label for="para-4">{{ __('Credit or debit card') }}</label>
            <div id="card-element">
                <!-- a Stripe Element will be inserted here. -->
            </div>
            <!-- Used to display form errors -->
            <div id="card-errors"></div>
        </div>
        
        <button type="submit" class="pay-button sub-btn">{{ __('Pay With Stripe') }}</button>
    </form>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('Modules/Stripe/Resources/assets/css/style.min.css') }}">
@endsection

@section('js')
    <!-- Stripe JS -->
    <script src="https://js.stripe.com/v3/"></script>

    <!-- Your JS File -->
    <script>
        var stripe = Stripe('{{ $publishableKey }}');
    </script>
    <script src="{{ asset('Modules/Stripe/Resources/assets/js/index.min.js') }}"></script>
@endsection
