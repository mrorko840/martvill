@extends('gateway::layouts.payment')
@section('logo', asset(config('flutterwave.logo')))

@section('gateway', asset(config('flutterwave.name')))
@section('content')
    <p class="para-6">{{ __('Fill in the required information') }}</p>
    <div class="straight-line"></div>
    <form action="{{ route('gateway.complete', withOldQueryIntegrity(['gateway' => config('flutterwave.alias')])) }}"
        method="post" id="payment-form" class="pay-form">
        @csrf
        <div class="email-field">
            <label class="para-4">{{ __('Enter Full Name') }} *</label>
            <div class="credit-card ">
                <div class="input-svg">

                    <svg class="icon" width="16" height="18" viewBox="0 0 16 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.7032 15.6572C15.2005 15.5536 15.4967 15.0332 15.2496 14.5894C14.7048 13.611 13.8466 12.7512 12.7488 12.096C11.3348 11.2521 9.60243 10.7947 7.8202 10.7947C6.03798 10.7947 4.30556 11.2521 2.89163 12.096C1.79377 12.7512 0.935566 13.611 0.390807 14.5894C0.143699 15.0332 0.439867 15.5536 0.93716 15.6572C5.47708 16.6034 10.1633 16.6034 14.7032 15.6572Z"
                            fill="#898989" />
                        <circle cx="7.82008" cy="4.49782" r="4.49782" fill="#898989" />
                    </svg>

                    <svg class="divider" xmlns="http://www.w3.org/2000/svg" width="3" height="28" viewBox="0 0 1 28"
                        fill="none">
                        <line x1="0.5" y1="2.18557e-08" x2="0.499999" y2="28" stroke="#DFDFDF" />
                    </svg>
                </div>
                <input required type="text" name="name" class="form-control card-input-field"
                    aria-label="{{ __('Full Name') }}" />
            </div>
        </div>

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
                <input required type="email" name="email" class="form-control card-input-field"
                    aria-label="{{ __('Email') }}" />
            </div>
        </div>
        <button type="submit" class="pay-button sub-btn">{{ __('Pay With Flutterwave') }}</button>
    </form>
@endsection
