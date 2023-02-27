@extends('gateway::layouts.payment')

@section('logo', asset(config('authorizenet.logo')))

@section('gateway', config('authorizenet.name'))

@section('content')

    <p class="para-6">{{ __('Fill in the required information') }}</p>
    <div class="straight-line"></div>
    @include('gateway::partial.instruction')
    <form class="pay-form needs-validation"
        action="{{ route('gateway.complete', withOldQueryIntegrity(['gateway' => config('authorizenet.alias')])) }}" method="post"
        id="payment-form">
        @csrf
        <div>
            <div id="card-element">
                <!-- a Authorize net Element will be inserted here. -->

                <div class="mb-3">
                    <label for="cardNumber" class="form-label">{{ __('Credit or debit card') }}</label>
                    <input type="number"  maxlength="17" minlength="13" class="form-control" name="cardNumber" id="cardNumber" placeholder="4111 1111 1111 1111" required>
                </div>

                <div class="d-flex justify-content-between">
                    <div>
                        <label for="staticEmail2" class="form-label">{{ __('Expiration Date') }}</label>
                        <div class="d-flex justify-items-start">
                            <select class="form-select" name="expiration_month" aria-label="Default select example">
                                @foreach (range(1, 12) as $month)
                                    <option value="{{ $month }}" {{ old('expiration-month') == $month ? 'selected' : '' }}>{{ DateTime::createFromFormat('!m', $month)->format('F') }}</option>
                                @endforeach
                            </select>
                            <select class="form-select" name="expiration_year" aria-label="Default select example">
                                @for($year = date('Y'); $year <= (date('Y') + 20); $year++)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="cvv" class="form-label">{{ __('CVV') }}</label>
                        <input type="number" maxlength="4" minlength="3" name="cvv" class="form-control" id="cvv" placeholder="123" value="{{ old('cvv') }}" required>
                    </div>
                </div>
            </div>
            <!-- Used to display form errors -->
            <div id="card-errors"></div>
        </div>
        <button type="submit" class="pay-button sub-btn">{{ __('Pay With Authorize Net') }}</button>
    </form>
@endsection

@section('css')

@endsection

@section('js')

@endsection
