@extends('admin.layouts.app')
@section('page_title', __('Edit Coupon'))
@section('css')
    <link rel="stylesheet" href="{{ asset('public/dist/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}">
@endsection

@section('content')
    <div class="col-sm-12" id="coupon-edit-container">
        <div class="card">
            <div class="card-body">
                <div class="row" id="theme-container">
                    <div class="col-sm-3 z-index-10 pe-0 ps-0 ps-md-3" aria-labelledby="navbarDropdown">
                        <div class="card card-info shadow-none" id="nav">
                            <div class="card-header pt-4 border-bottom">
                                <h5 id="general-settings">{{ __('Coupon Update') }}</h5>
                            </div>
                            <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <li><a class="nav-link active text-left tab-name" id="v-pills-general-tab" data-bs-toggle="pill"
                                        href="#v-pills-general" role="tab" aria-controls="v-pills-general"
                                        aria-selected="true" data-id="{{ __('General') }}">{{ __('General') }}</a></li>
                                <li><a class="nav-link text-left tab-name" id="v-pills-restriction-tab" data-bs-toggle="pill"
                                        href="#v-pills-restriction" role="tab" aria-controls="v-pills-restriction"
                                        aria-selected="true"
                                        data-id="{{ __('Usage Restriction') }}">{{ __('Usage Restriction') }}</a></li>
                                <li><a class="nav-link text-left tab-name" id="v-pills-limit-tab" data-bs-toggle="pill"
                                        href="#v-pills-limit" role="tab" aria-controls="v-pills-limit"
                                        aria-selected="true" data-id="{{ __('Usage Limit') }}">{{ __('Usage Limit') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12 ps-0">
                        <div class="card card-info shadow-none">
                            <div class="card-header pt-4 border-bottom">
                                <h5><span id="theme-title"></span></h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('coupon.update', ['id' => $coupon->id]) }}" method="post"
                                    class="form-horizontal">
                                    @csrf
                                    <div class="tab-content p-0 box-shadow-unset" id="topNav-v-pills-tabContent">
                                        {{-- General --}}
                                        <div class="tab-pane fade" id="v-pills-general" role="tabpanel"
                                            aria-labelledby="v-pills-general-tab">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 control-label require"
                                                            for="name">{{ __('Name') }}</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" placeholder="{{ __('Name') }}" class="form-control inputFieldDesign" id="name" name="name" required
                                                                maxlength="120" oninvalid="this.setCustomValidity('{{ __('This field is required.') }}')" value="{{ !empty(old('name')) ? old('name') : $coupon->name }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 control-label require" for="code">{{ __('Code') }}</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" placeholder="{{ __('Code') }}" class="form-control inputFieldDesign" id="code" name="code" required
                                                                maxlength="100" oninvalid="this.setCustomValidity('{{ __('This field is required.') }}')" value="{{ !empty(old('code')) ? old('code') : $coupon->code }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 control-label text-left"
                                                            for="discount_type">{{ __('Discount Type') }}</label>
                                                        <div class="col-sm-6">
                                                            <select class="form-control select2-hide-search sl_common_bx"
                                                                id="discount_type" name="discount_type" required
                                                                oninvalid="this.setCustomValidity('{{ __('This field is required.') }}')">
                                                                <option value="Flat"
                                                                    {{ old('discount_type', $coupon->discount_type) == 'Flat' ? 'selected' : '' }}>
                                                                    {{ __('Flat') }}</option>
                                                                <option value="Percentage"
                                                                    {{ old('discount_type', $coupon->discount_type) == 'Percentage' ? 'selected' : '' }}>
                                                                    {{ __('Percentage') }}</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <label
                                                                class="control-label text-left require d-inline discount_amount_label"
                                                                for="discount_amount">{{ __('Discount Amount') }}</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="text" step="any"
                                                                placeholder="{{ __('Discount Amount') }}"
                                                                class="form-control positive-float-number inputFieldDesign"
                                                                id="discount_amount" max="99999999" name="discount_amount"
                                                                required
                                                                oninvalid="this.setCustomValidity('{{ __('This field is required.') }}')"
                                                                data-max="{{ __('The value must be :x than or equal to :y.', ['x' => __('less'), 'y' => 99999999]) }}"
                                                                value="{{ !empty(old('discount_amount')) ? formatCurrencyAmount(old('discount_amount')) : formatCurrencyAmount($coupon->discount_amount) }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row" id="max_discount">
                                                        <label class="col-sm-2 control-label text-left"
                                                            for="maximum_discount_amount">{{ __('Maximum Discount') }}</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" step="any"
                                                                placeholder="{{ __('Maximum Discount') }}"
                                                                class="form-control positive-float-number inputFieldDesign"
                                                                id="maximum_discount_amount" max="99999999"
                                                                name="maximum_discount_amount"
                                                                data-max="{{ __('The value must be :x than or equal to :y.', ['x' => __('less'), 'y' => 99999999]) }}"
                                                                value="{{ !empty(old('maximum_discount_amount')) ? formatCurrencyAmount(old('maximum_discount_amount')) : (!empty((float) $coupon->maximum_discount_amount) ? formatCurrencyAmount($coupon->maximum_discount_amount) : '') }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row -mt-6">
                                                        <label class="col-sm-2 control-label text-left"
                                                            >{{ __('Allow free shipping') }}</label>
                                                        <div class="col-6">
                                                            <div class="switch switch-bg d-inline m-r-10 ">
                                                                <input class="is_default" name="allow_free_shipping"
                                                                    type="checkbox" id="free_shipping"
                                                                    {{ $coupon->allow_free_shipping ? 'checked' : '' }}>
                                                                <label for="free_shipping" class="cr"></label>
                                                            </div>
                                                            <small class="line-height-25"
                                                                >{{ __('Check this box if the coupon grants free shipping. A free shipping method must be enabled in your shipping zone and be set to require "a valid free shipping coupon" (see the "Free Shipping Requires" setting).') }}</small>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-2 control-label require"
                                                            for="start_date">{{ __('Start Date') }}</label>
                                                        <div class="d-flex date col-sm-6">
                                                            <div class="input-group-prepend">
                                                                <i class="bg-white fas fa-calendar-alt input-group-text rounded-0 rounded-start border-end-0 h-40"></i>
                                                            </div>
                                                            <input class="form-control inputFieldDesign rounded-0 rounded-end" id="start_date" type="text"
                                                                name="start_date" required
                                                                oninvalid="this.setCustomValidity('{{ __('This field is required.') }}')"
                                                                value="{{ $coupon->start_date }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 control-label require"
                                                            for="end_date">{{ __('End Date') }}</label>
                                                        <div class="d-flex date col-sm-6">
                                                            <div class="input-group-prepend">
                                                                <i class="bg-white fas fa-calendar-alt input-group-text rounded-0 rounded-start border-end-0 h-40"></i>
                                                            </div>
                                                            <input class="form-control rounded-0 rounded-end inputFieldDesign" id="end_date" type="text"
                                                                name="end_date" required
                                                                oninvalid="this.setCustomValidity('{{ __('This field is required.') }}')"
                                                                value="{{ $coupon->end_date }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 control-label require"
                                                            for="status">{{ __('Status') }}</label>
                                                        <div class="col-sm-6">
                                                            <select class="form-control select2-hide-search sl_common_bx"
                                                                id="status" name="status" required
                                                                oninvalid="this.setCustomValidity('{{ __('This field is required.') }}')">
                                                                <option value="">{{ __('Select One') }}</option>
                                                                <option value="Active"
                                                                    {{ old('status', $coupon->status) == 'Active' ? 'selected' : '' }}>
                                                                    {{ __('Active') }}</option>
                                                                <option value="Inactive"
                                                                    {{ old('status', $coupon->status) == 'Inactive' ? 'selected' : '' }}>
                                                                    {{ __('Inactive') }}</option>
                                                                <option value="Expired"
                                                                    {{ old('status', $coupon->status) == 'Expired' ? 'selected' : '' }}>
                                                                    {{ __('Expired') }}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer py-0">
                                                <div class="form-group row">
                                                    <label for="btn_save" class="col-sm-3 control-label"></label>
                                                    <div class="col-sm-12">
                                                        <button data-id="v-pills-restriction-tab" type="button"
                                                            class="btn form-submit custom-btn-submit float-right switch-tab">{{ __('Next') }}</button>
                                                        <button type="button"
                                                            class="btn form-submit custom-btn-submit float-right"
                                                            disabled>{{ __('Previous') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Usage restriction --}}
                                        <div class="tab-pane fade" id="v-pills-restriction" role="tabpanel"
                                            aria-labelledby="v-pills-restriction-tab">
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label"
                                                    for="vendor_id">{{ __('Vendor') }}</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control select-vendor select2 sl_common_bx"
                                                        id="vendor_id" name="vendor_id">
                                                        @if ($coupon->vendor_id)
                                                            <option value="{{ $coupon->vendor_id }}">
                                                                {{ $coupon->vendor->name }}</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            @if (isActive('Shop') ? false : false)
                                                <div class="form-group row">
                                                    <label class="col-sm-2 control-label"
                                                        for="shop_id">{{ __('Shop') }}</label>
                                                    <div class="col-sm-6">
                                                        <select class="form-control select2 sl_common_bx" id="shop_id"
                                                            name="shop_id">
                                                            <option value="">{{ __('Select One') }}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label"
                                                    for="product_id">{{ __('Products') }}</label>
                                                <div class="col-sm-6">
                                                    <select class="form-control select-products select2 sl_common_bx"
                                                        id="product_id" name="product_ids[]" multiple>
                                                        {{-- Product will be load here --}}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label text-left" for="minimum_spend">
                                                    {{ __('Minimum Spend') }}
                                                    <span data-bs-toggle="popover" data-placement="right" data-trigger="hover" data-content="{{ __('You must spend more than or equal this amount to get coupon discount.') }}" class="add-note-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 6C12 9.31371 9.31371 12 6 12C2.68629 12 0 9.31371 0 6C0 2.68629 2.68629 0 6 0C9.31371 0 12 2.68629 12 6ZM6.66667 10C6.66667 10.3682 6.36819 10.6667 6 10.6667C5.63181 10.6667 5.33333 10.3682 5.33333 10C5.33333 9.63181 5.63181 9.33333 6 9.33333C6.36819 9.33333 6.66667 9.63181 6.66667 10ZM6 1.33333C4.52724 1.33333 3.33333 2.52724 3.33333 4H4.66667C4.66667 3.26362 5.26362 2.66667 6 2.66667H6.06287C6.76453 2.66667 7.33333 3.23547 7.33333 3.93713V4.27924C7.33333 4.62178 7.11414 4.92589 6.78918 5.03421C5.91976 5.32402 5.33333 6.13765 5.33333 7.05409V8.66667H6.66667V7.05409C6.66667 6.71155 6.88586 6.40744 7.21082 6.29912C8.08024 6.00932 8.66667 5.19569 8.66667 4.27924V3.93713C8.66667 2.49909 7.50091 1.33333 6.06287 1.33333H6Z" fill="#898989" />
                                                        </svg>
                                                    </span>
                                                </label>
                                                <div class="col-sm-6">
                                                    <input type="text" placeholder="{{ __('Minimum Spend') }}" class="form-control positive-float-number inputFieldDesign" id="minimum_spend" name="minimum_spend" value="{{ !empty(old('minimum_spend')) ? old('minimum_spend') : ($coupon->minimum_spend != 0 ? formatCurrencyAmount($coupon->minimum_spend) : '') }}">
                                                </div>
                                            </div>
                                            <div class="modal-footer py-0">
                                                <div class="form-group row">
                                                    <label for="btn_save" class="col-sm-3 control-label"></label>
                                                    <div class="col-sm-12">
                                                        <button data-id="v-pills-limit-tab" type="button"
                                                            class="btn form-submit custom-btn-submit float-right switch-tab">{{ __('Next') }}</button>
                                                        <button data-id="v-pills-general-tab" type="button"
                                                            class="btn form-submit custom-btn-submit float-right switch-tab">{{ __('Previous') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Usage limitation --}}
                                        <div class="tab-pane fade" id="v-pills-limit" role="tabpanel"
                                            aria-labelledby="v-pills-limit-tab">
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label" for="usage_limit">
                                                    {{ __('Usage Limit') }}
                                                    <span data-bs-toggle="popover" data-placement="right" data-trigger="hover" data-content="{{ __('How many times this coupon can be used.') }}" class="add-note-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 6C12 9.31371 9.31371 12 6 12C2.68629 12 0 9.31371 0 6C0 2.68629 2.68629 0 6 0C9.31371 0 12 2.68629 12 6ZM6.66667 10C6.66667 10.3682 6.36819 10.6667 6 10.6667C5.63181 10.6667 5.33333 10.3682 5.33333 10C5.33333 9.63181 5.63181 9.33333 6 9.33333C6.36819 9.33333 6.66667 9.63181 6.66667 10ZM6 1.33333C4.52724 1.33333 3.33333 2.52724 3.33333 4H4.66667C4.66667 3.26362 5.26362 2.66667 6 2.66667H6.06287C6.76453 2.66667 7.33333 3.23547 7.33333 3.93713V4.27924C7.33333 4.62178 7.11414 4.92589 6.78918 5.03421C5.91976 5.32402 5.33333 6.13765 5.33333 7.05409V8.66667H6.66667V7.05409C6.66667 6.71155 6.88586 6.40744 7.21082 6.29912C8.08024 6.00932 8.66667 5.19569 8.66667 4.27924V3.93713C8.66667 2.49909 7.50091 1.33333 6.06287 1.33333H6Z" fill="#898989" />
                                                        </svg>
                                                    </span>
                                                </label>
                                                <div class="col-sm-6">
                                                    <input type="text" placeholder="{{ __('Usage Limit') }}" class="form-control positive-int-number inputFieldDesign" id="usage_limit"
                                                        name="usage_limit" value="{{ !empty(old('usage_limit')) ? old('usage_limit') : $coupon->usage_limit }}">
                                                </div>
                                            </div>
                                            <div class="modal-footer py-0">
                                                <div class="form-group row">
                                                    <label for="btn_save" class="col-sm-3 control-label"></label>
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn form-submit custom-btn-submit float-right coupon-submit-button"
                                                            id="footer-btn">{{ __('Save') }}</button>
                                                        <a href="{{ route('coupon.index') }}" class="py-2 me-2 form-submit custom-btn-cancel float-right coupon-submit-button all-cancel-btn">{{ __('Cancel') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
        'use strict';
        var shopId = "{{ $coupon->shop_id }}";
        var couponId = "{{ $coupon->id }}";
        var vendorId = "{{ $coupon->vendor_id }}";
        var is_active = "{{ isActive('Shop') }}";
        var old_item = @json(old('product_ids'));
        if (!(Array.isArray(old_item))) {
            old_item = @json($products);
        }
        var old_vendor = "{{ old('vendor_id') }}";
        var oldProductUrl = "{{ route('coupon.oldProducts') }}";
    </script>

    <script src="{{ asset('public/dist/js/custom/validation.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/condition.min.js') }}"></script>

    <!-- date range picker Js -->
    <script src="{{ asset('public/dist/js/moment.min.js') }}"></script>
    <script src="{{ asset('public/dist/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/coupon.min.js') }}"></script>
@endsection
