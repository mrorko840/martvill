@extends('gateway::layouts.payment')

@section('logo', asset(config('paystack.logo')))

@section('gateway', config('paystack.name'))

@section('content')
    <p class="para-6">{{ __('Fill in the required information') }}</p>
    <div class="straight-line"></div>
    @include('gateway::partial.instruction')
    <form action="{{ route('gateway.complete', withOldQueryIntegrity(['gateway' => config('paystack.alias')])) }}"
        method="post" id="payment-form" class="needs-validation">
        @csrf
        <div class="email-field">
            <label class="para-4">{{ __('Enter Email Address') }} *</label>
            <div class="credit-card ">
                <div class="input-svg">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14"
                        fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.87868 0.87868C0 1.75736 0 3.17157 0 6V8C0 10.8284 0 12.2426 0.87868 13.1213C1.75736 14 3.17157 14 6 14H12C14.8284 14 16.2426 14 17.1213 13.1213C18 12.2426 18 10.8284 18 8V6C18 3.17157 18 1.75736 17.1213 0.87868C16.2426 0 14.8284 0 12 0H6C3.17157 0 1.75736 0 0.87868 0.87868ZM3.5547 3.16795C3.09517 2.8616 2.4743 2.98577 2.16795 3.4453C1.8616 3.90483 1.98577 4.5257 2.4453 4.83205L7.8906 8.46225C8.5624 8.91012 9.4376 8.91012 10.1094 8.46225L15.5547 4.83205C16.0142 4.5257 16.1384 3.90483 15.8321 3.4453C15.5257 2.98577 14.9048 2.8616 14.4453 3.16795L9 6.79815L3.5547 3.16795Z"
                            fill="#898989" />
                    </svg>
                    <svg class="divider" xmlns="http://www.w3.org/2000/svg" width="3" height="28" viewBox="0 0 1 28"
                        fill="none">
                        <line x1="0.5" y1="2.18557e-08" x2="0.499999" y2="28" stroke="#DFDFDF" />
                    </svg>
                </div>
                <input required type="email" name="email" class="form-control card-input-field" aria-label="Email"
                    aria-describedby="email" />
            </div>
        </div>
        <button type="submit" class="pay-button sub-btn">{{ __('Pay with Paystack') }}</button>
    </form>
@endsection
