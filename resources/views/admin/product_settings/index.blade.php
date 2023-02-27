@extends('admin.layouts.app')
@section('page_title', __('Product Setting'))

@section('css')
    <link rel="stylesheet" href="{{ asset('Modules/CMS/Resources/assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/dist/css/product.min.css') }}">
@endsection

@section('content')
    <div class="col-sm-12">
        <div class="card admin-panel-product-setting" id="theme-container">
            <div class="card-body row">
                <div class="col-lg-3 col-12 z-index-10 pe-0 ps-0 ps-md-3" aria-labelledby="navbarDropdown">
                    <div class="card card-info shadow-none">
                        <div class="card-header p-t-20 border-bottom mb-2">
                            <h5>{{ __('Product Setting') }}</h5>
                        </div>
                        <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <li><a class="nav-link active text-left tab-name" id="v-pills-general-tab" data-bs-toggle="pill" href="#v-pills-general" role="tab" aria-controls="v-pills-general" aria-selected="true" data-id = {{ __('Options') }}>{{ __('Options') }}</a></li>
                            <li><a class="nav-link text-left tab-name" id="v-pills-inventory-tab" data-bs-toggle="pill" href="#v-pills-inventory" role="tab" aria-controls="v-pills-inventory" aria-selected="true" data-id = {{ __('Inventory') }}>{{ __('Inventory') }}</a></li>
                            <li><a class="nav-link text-left tab-name" id="v-pills-vendor-tab" data-bs-toggle="pill" href="#v-pills-vendor" role="tab" aria-controls="v-pills-vendor" aria-selected="true" data-id = {{ __('Vendor') }}>{{ __('Vendor') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-12 ps-0">
                    <div class="card card-info shadow-none mb-0">
                        <div class="card-header p-t-20 border-bottom">
                            <h5 id="theme-title">{{ __('Options') }}</h5>
                        </div>

                        <div class="tab-content" id="topNav-v-pills-tabContent">
                            {{-- Options --}}
                            <div class="tab-pane fade parent show active" id="v-pills-general" role="tabpanel" aria-labelledby="v-pills-general-tab">
                                <div class="noti-alert pad no-print warningMessage mt-2">
                                    <div class="alert warning-message abc">
                                        <strong id="warning-msg" class="msg"></strong>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <form action="{{ route('product.setting.general') }}" method="post" class="form-horizontal product_setting_form">
                                            @csrf
                                            <div class="card-body border-bottom table-border-style p-0">
                                                <div class="form-tabs">
                                                    <div class="tab-content box-shadow-unset px-0 py-2">
                                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                            <div class="form-group row mt-14">
                                                                <label class="col-3 control-label">{{ __('Product Type') }}</label>
                                                                <div class="col-7">
                                                                    <div class="checkbox checkbox-warning checkbox-fill d-block">
                                                                        <input type="hidden" name="simple_product" value="0">
                                                                        <input type="checkbox" name="simple_product" id="simple_product" value="1" {{ isset($setting['simple_product']) && $setting['simple_product'] == 1 ? 'checked' : '' }}>
                                                                        <label class="cr" for="simple_product">{{ __('Simple product.') }}</label>
                                                                    </div>
                                                                    <div class="checkbox checkbox-warning checkbox-fill d-block">
                                                                        <input type="hidden" name="grouped_product" value="0">
                                                                        <input type="checkbox" name="grouped_product" id="grouped_product" value="1" {{ isset($setting['grouped_product']) && $setting['grouped_product'] == 1 ? 'checked' : '' }}>
                                                                        <label class="cr" for="grouped_product">{{ __('Grouped product.') }}</label>
                                                                    </div>
                                                                    <div class="checkbox checkbox-warning checkbox-warning checkbox-fill d-block">
                                                                        <input type="hidden" name="affiliate_product" value="0">
                                                                        <input type="checkbox" name="affiliate_product" id="affiliate" value="1" {{ isset($setting['affiliate_product']) && $setting['affiliate_product'] == 1 ? 'checked' : '' }}>
                                                                        <label class="cr" for="affiliate">{{ __('External/Affilate product.') }}</label>
                                                                    </div>
                                                                    <div class="checkbox checkbox-warning checkbox-fill d-block">
                                                                        <input type="hidden" name="variable_product" value="0">
                                                                        <input type="checkbox" name="variable_product" id="variable_product" value="1" {{ isset($setting['variable_product']) && $setting['variable_product'] == 1 ? 'checked' : '' }}>
                                                                        <label class="cr" for="variable_product">{{ __('Variable product.') }}</label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="taxes" class="col-3 control-label">{{ __('Taxes') }}</label>
                                                                <div class="col-9 d-flex">
                                                                    <div class="me-3">
                                                                        <input type="hidden" name="taxes" value="0">
                                                                        <div class="switch switch-bg d-inline m-r-10">
                                                                            <input type="checkbox" name="taxes" id="taxes" value="1" {{ isset($setting['taxes']) && $setting['taxes'] == 1 ? 'checked' : '' }}>
                                                                            <label for="taxes" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-2">
                                                                        <span>{{ __('Rates will be configurable and taxes will be calculated during checkout.') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="coupons" class="col-sm-3 control-label">{{ __('Coupons') }}</label>
                                                                <div class="col-9 d-flex">
                                                                    <div class="me-3">
                                                                        <input type="hidden" name="coupons" value="0">
                                                                        <div class="switch switch-bg d-inline m-r-10">
                                                                            <input type="checkbox" name="coupons" class="checkActivity" id="coupons" value="1" {{ isset($setting['coupons']) && $setting['coupons'] == 1 ? 'checked' : '' }}>
                                                                            <label for="coupons" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-2">
                                                                        <span>{{ __('Apply Coupon') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row dependency">
                                                                <label for="calculate_coupon" class="col-sm-3 control-label text-left">{{ __('Calculate coupon discounts sequentially') }}</label>
                                                                <div class="col-9 d-flex">
                                                                    <div class="me-3">
                                                                        <input type="hidden" name="calculate_coupon" value="0">
                                                                        <div class="switch switch-bg d-inline m-r-10">
                                                                            <input type="checkbox" name="calculate_coupon" id="calculate_coupon" value="1" {{ isset($setting['calculate_coupon']) && $setting['calculate_coupon'] == 1 ? 'checked' : '' }}>
                                                                            <label for="calculate_coupon" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-2">
                                                                        <span>{{ __('When applying multiple coupons, apply the first coupon to the full price and the second coupon to the discounted price, and so on.') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="calculate_coupon" class="col-sm-3 control-label text-left">{{ __('Measurements') }}</label>
                                                                <div class="col-sm-4">
                                                                    <label for="measurement_weight" class="control-label">{{ __('Weight unit') }}</label>
                                                                    <select class="form-control select2-hide-search" id="measurement_weight" name="measurement_weight">
                                                                        <option value="kg" {{ isset($setting['measurement_weight']) && $setting['measurement_weight'] == "kg" ? 'selected' : '' }}>kg</option>
                                                                        <option value="g" {{ isset($setting['measurement_weight']) && $setting['measurement_weight'] == "g" ? 'selected' : '' }}>g</option>
                                                                        <option value="lbs" {{ isset($setting['measurement_weight']) && $setting['measurement_weight'] == "lbs" ? 'selected' : '' }}>lbs</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-sm-4">
                                                                    <label for="measurement_dimension" class="control-label">{{ __('Dimension unit') }}</label>
                                                                    <select class="form-control select2-hide-search" id="measurement_dimension" name="measurement_dimension">
                                                                        <option value="m" {{ isset($setting['measurement_dimension']) && $setting['measurement_dimension'] == "m" ? 'selected' : '' }}>m</option>
                                                                        <option value="cm" {{ isset($setting['measurement_dimension']) && $setting['measurement_dimension'] == "cm" ? 'selected' : '' }}>cm</option>
                                                                        <option value="mm" {{ isset($setting['measurement_dimension']) && $setting['measurement_dimension'] == "mm" ? 'selected' : '' }}>mm</option>
                                                                        <option value="inch" {{ isset($setting['measurement_dimension']) && $setting['measurement_dimension'] == "inch" ? 'selected' : '' }}>inch</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row mt-25">
                                                                <label for="review" class="col-sm-3 control-label text-left">{{ __('Reviews') }}</label>
                                                                <div class="col-9 d-flex mt-neg-2">
                                                                    <div class="me-3">
                                                                        <input type="hidden" name="reviews_enable_product_review" value="0">
                                                                        <div class="switch switch-bg d-inline m-r-10">
                                                                            <input type="checkbox" name="reviews_enable_product_review" class="checkActivity" id="reviews_enable_product_review" value="1" {{ isset($setting['reviews_enable_product_review']) && $setting['reviews_enable_product_review'] == 1 ? 'checked' : '' }}>
                                                                            <label for="reviews_enable_product_review" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-2">
                                                                        <span>{{ __('Enable product reviews') }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="col-9 offset-md-3 offset-1 dependency">
                                                                    <div class="d-flex">
                                                                        <div class="me-3">
                                                                            <input type="hidden" name="reviews_verified_owner_label" value="0">
                                                                            <div class="switch switch-bg d-inline m-r-10">
                                                                                <input type="checkbox" name="reviews_verified_owner_label" id="reviews_verified_owner_label" value="1" {{ isset($setting['reviews_verified_owner_label']) && $setting['reviews_verified_owner_label'] == 1 ? 'checked' : '' }}>
                                                                                <label for="reviews_verified_owner_label" class="cr"></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-2">
                                                                            <span>{{ __("Show 'verified owner' label on customer reviews") }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-9 offset-md-3 offset-1 dependency">
                                                                    <div class="d-flex">
                                                                        <div class="me-3">
                                                                            <input type="hidden" name="review_left" value="0">
                                                                            <div class="switch switch-bg d-inline m-r-10">
                                                                                <input type="checkbox" name="review_left" id="review_left" value="1" {{ isset($setting['review_left']) && $setting['review_left'] == 1 ? 'checked' : '' }}>
                                                                                <label for="review_left" class="cr"></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-2">
                                                                            <span>{{ __("Reviews can only be left by 'verified owners'") }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row mt-25 dependency">
                                                                <label for="rating" class="col-sm-3 control-label text-left">{{ __('Ratings') }}</label>
                                                                <div class="col-9 d-flex mt-neg-2">
                                                                    <div class="me-3">
                                                                        <input type="hidden" name="rating_enable" value="0">
                                                                        <div class="switch switch-bg d-inline m-r-10">
                                                                            <input type="checkbox" name="rating_enable" class="checkActivity" id="rating_enable" value="1" {{ isset($setting['rating_enable']) && $setting['rating_enable'] == 1 ? 'checked' : '' }}>
                                                                            <label for="rating_enable" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-2">
                                                                        <span>{{ __('Enable star rating on reviews') }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="col-9 offset-md-3 offset-1 dependency">
                                                                    <div class="d-flex">
                                                                        <div class="me-3">
                                                                            <input type="hidden" name="rating_required" value="0">
                                                                            <div class="switch switch-bg d-inline m-r-10">
                                                                                <input type="checkbox" name="rating_required" id="rating_required" value="1" {{ isset($setting['rating_required']) && $setting['rating_required'] == 1 ? 'checked' : '' }}>
                                                                                <label for="rating_required" class="cr"></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-2">
                                                                            <span>{{ __('Star ratings should be required, not optional') }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="wishlist" class="col-sm-3 control-label">{{ __('Wishlist') }}</label>
                                                                <div class="col-9 d-flex">
                                                                    <div class="me-3">
                                                                        <input type="hidden" name="wishlist" value="0">
                                                                        <div class="switch switch-bg d-inline m-r-10">
                                                                            <input type="checkbox" name="wishlist" class="checkActivity" id="wishlist" value="1" {{ isset($setting['wishlist']) && $setting['wishlist'] == 1 ? 'checked' : '' }}>
                                                                            <label for="wishlist" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-2">
                                                                        <span>{{ __('Enable Wishlist') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="compare" class="col-sm-3 control-label">{{ __('Compare') }}</label>
                                                                <div class="col-9 d-flex">
                                                                    <div class="me-3">
                                                                        <input type="hidden" name="compare" value="0">
                                                                        <div class="switch switch-bg d-inline m-r-10">
                                                                            <input type="checkbox" name="compare" class="checkActivity" id="compare" value="1" {{ isset($setting['compare']) && $setting['compare'] == 1 ? 'checked' : '' }}>
                                                                            <label for="compare" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-2">
                                                                        <span>{{ __('Enable Compare') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer p-0">
                                                <div class="form-group row">
                                                    <label for="btn_save" class="col-sm-3 control-label"></label>
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn form-submit custom-btn-submit float-right save-button" id="footer-btn">
                                                            <span class="d-none product-spinner spinner-border spinner-border-sm text-secondary" role="status"></span>
                                                            {{ __('Save') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- Inventory --}}
                            <div class="tab-pane fade parent" id="v-pills-inventory" role="tabpanel" aria-labelledby="v-pills-inventory-tab">
                                <div class="noti-alert pad no-print warningMessage mt-2">
                                    <div class="alert warning-message abc">
                                        <strong id="warning-msg" class="msg"></strong>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                    <form action="{{ route('product.setting.inventory') }}" method="post" class="form-horizontal product_setting_form">
                                        @csrf
                                        <div class="card-body border-bottom table-border-style p-0">
                                            <div class="form-tabs">
                                                <div class="tab-content box-shadow-unset px-0 py-2">
                                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                        <div class="form-group row">
                                                            <label for="manage_stock" class="col-sm-3 control-label">{{ __('Manage Stock') }}</label>
                                                            <div class="col-9 d-flex mt-neg-2">
                                                                <div class="me-3">
                                                                    <input type="hidden" name="manage_stock" value="0">
                                                                    <div class="switch switch-bg d-inline m-r-10">
                                                                        <input type="checkbox" name="manage_stock" class="checkActivity" id="manage_stock" value="1" {{ isset($setting['manage_stock']) && $setting['manage_stock'] == 1 ? 'checked' : '' }}>
                                                                        <label for="manage_stock" class="cr"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row dependency">
                                                            <label for="hold_stock" class="col-sm-3 control-label">{{ __('Hold stock (minutes)') }}</label>
                                                            <div class="col-9">
                                                                <div class="col-4 pl-0">
                                                                    <input type="number" class="form-control form-height" name="hold_stock" id="hold_stock" min="0" value="{{ isset($setting['hold_stock']) ? $setting['hold_stock'] : 0 }}">
                                                                </div>
                                                                <div class="mt-2">
                                                                    <span>{{ __('X minutes (Hold stock (for unpaid orders) for x minutes. When this limit is reached, the pending order will be canceled. Leave blank to disable.)') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row dependency">
                                                            <label for="notification" class="col-sm-3 control-label text-left">{{ __('Notifications') }}</label>
                                                            <div class="col-9 d-flex mt-neg-2">
                                                                <div class="me-3">
                                                                    <input type="hidden" name="notification_low_stock" value="0">
                                                                    <div class="switch switch-bg d-inline m-r-10">
                                                                        <input type="checkbox" name="notification_low_stock" id="notification_low_stock" value="1" {{ isset($setting['notification_low_stock']) && $setting['notification_low_stock'] == 1 ? 'checked' : '' }}>
                                                                        <label for="notification_low_stock" class="cr"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-2">
                                                                    <span>{{ __('Enable low stock notifications') }}</span>
                                                                </div>
                                                            </div>

                                                            <div class="col-9 offset-3 dependency">
                                                                <div class="d-flex">
                                                                    <div class="me-3">
                                                                        <input type="hidden" name="notification_out_of_stock" value="0">
                                                                        <div class="switch switch-bg d-inline m-r-10">
                                                                            <input type="checkbox" name="notification_out_of_stock" id="notification_out_of_stock" value="1" {{ isset($setting['notification_out_of_stock']) && $setting['notification_out_of_stock'] == 1 ? 'checked' : '' }}>
                                                                            <label for="notification_out_of_stock" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-2">
                                                                        <span>{{ __('Enable out of stock notifications') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row dependency mt-25">
                                                            <label for="stock_threshold" class="col-sm-3 control-label text-left">{{ __('Low and Out of stock threshold') }}</label>
                                                            <div class="col-sm-1">
                                                                <input type="hidden" name="stock_threshold" value="0">
                                                                <div class="switch switch-bg d-inline m-r-10">
                                                                    <input type="checkbox" name="stock_threshold" id="stock_threshold" value="1" {{ isset($setting['stock_threshold']) && $setting['stock_threshold'] == 1 ? 'checked' : '' }}>
                                                                    <label for="stock_threshold" class="cr"></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row dependency">
                                                            <label for="out_of_stock_visibility" class="col-sm-3 control-label text-left">{{ __('Out of stock visibility') }}</label>
                                                            <div class="col-9 d-flex mt-neg-2">
                                                                <div class="me-3">
                                                                    <input type="hidden" name="out_of_stock_visibility" value="0">
                                                                    <div class="switch switch-bg d-inline m-r-10">
                                                                        <input type="checkbox" name="out_of_stock_visibility" id="out_of_stock_visibility" value="1" {{ isset($setting['out_of_stock_visibility']) && $setting['out_of_stock_visibility'] == 1 ? 'checked' : '' }}>
                                                                        <label for="out_of_stock_visibility" class="cr"></label>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-2">
                                                                    <span>{{ __('Hide out of stock products from the catalog') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="stock_display_format" class="col-sm-3 control-label text-left">{{ __('Stock display format') }}</label>
                                                            <div class="col-md-9 col-12">
                                                                <div class="row radio">
                                                                    <div class="col-sm-12 mb-2">
                                                                        <div class="mb-2 radio radio-warning d-inline">
                                                                            <input type="radio" id="always_show" name="stock_display_format" {{ !isset($setting['stock_display_format']) ? 'checked' : '' }}
                                                                                value="always_show"
                                                                                {{ isset($setting['stock_display_format']) && $setting['stock_display_format'] == 'always_show' ? 'checked' : '' }}>
                                                                                <label class="cr custom" for="always_show"></label>
                                                                                <label class="w-75">{{ __("Always show quantity remaining in stock e.g. '2 in stock'") }}</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 mb-2">
                                                                        <div class="mb-2 radio radio-warning d-inline">
                                                                            <input type="radio" id="sometime_show" name="stock_display_format" value="sometime_show"
                                                                            {{ isset($setting['stock_display_format']) && $setting['stock_display_format'] == 'sometime_show' ? 'checked' : '' }}>
                                                                            <label class="cr custom" for="sometime_show"></label>
                                                                            <label class="w-75">{{ __("Only show quantity remaining in stock when low e.g. 'Only 2 left in stock'") }}</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="radio mb-2 radio-warning d-inline">
                                                                            <input type="radio" id="never_show" name="stock_display_format" value="never_show"
                                                                                {{ isset($setting['stock_display_format']) && $setting['stock_display_format'] == 'never_show' ? 'checked' : '' }}>
                                                                            <label class="cr custom" for="never_show"></label>
                                                                            <label>{{ __('Never show quantity remaining in stock') }}</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0">
                                            <div class="form-group row">
                                                <label for="btn_save" class="col-sm-3 control-label"></label>
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn form-submit custom-btn-submit float-right save-button" id="footer-btn">
                                                        <span class="d-none product-spinner spinner-border spinner-border-sm text-secondary" role="status"></span>
                                                        {{ __('Save') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            {{-- Vendor --}}
                            <div class="tab-pane fade parent" id="v-pills-vendor" role="tabpanel" aria-labelledby="v-pills-vendor-tab">
                                <div class="noti-alert pad no-print warningMessage mt-2">
                                    <div class="alert warning-message abc">
                                        <strong id="warning-msg" class="msg"></strong>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <form action="{{ route('product.setting.vendor') }}" method="post" class="form-horizontal product_setting_form">
                                            @csrf
                                            <div class="card-body border-bottom table-border-style p-0">
                                                <div class="form-tabs">
                                                    <div class="tab-content box-shadow-unset px-0 py-2">
                                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                            <div class="form-group row">
                                                                <label for="is_publish_product" class="col-sm-3 control-label text-left">{{ __('Publish Product') }}</label>
                                                               <div class="col-9 d-flex mt-neg-2">
                                                                    <div class="me-3">
                                                                        <input type="hidden" name="is_publish_product" value="0">
                                                                        <div class="switch switch-bg d-inline m-r-10">
                                                                            <input type="checkbox" name="is_publish_product" id="is_publish_product" value="1" {{ isset($setting['is_publish_product']) && $setting['is_publish_product'] == 1 ? 'checked' : '' }}>
                                                                            <label for="is_publish_product" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-2">
                                                                        <span>{{ __('Without admin review, vendor can publish product directly.') }}</span>
                                                                    </div>
                                                               </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="notification" class="col-sm-3 control-label text-left">{{ __('Withdrawal Method') }}</label>
                                                                <div class="col-9 d-flex mt-neg-2">
                                                                    <div class="me-3">
                                                                        <input type="hidden" name="paypal" value="Inactive">
                                                                        <div class="switch switch-bg d-inline m-r-10">
                                                                            <input type="checkbox" name="paypal" id="paypal" value="Active" {{ $withdrawalMethods->where('method_name', 'Paypal')->first()->status == 'Active' ? 'checked' : '' }}>
                                                                            <label for="paypal" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-2">
                                                                        <span>{{ __('Paypal') }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="col-9 offset-3">
                                                                    <div class="d-flex">
                                                                        <div class="me-3">
                                                                            <input type="hidden" name="bank" value="Inactive">
                                                                            <div class="switch switch-bg d-inline m-r-10">
                                                                                <input type="checkbox" name="bank" id="bank" value="Active" {{ $withdrawalMethods->where('method_name', 'Bank')->first()->status == 'Active' ? 'checked' : '' }}>
                                                                                <label for="bank" class="cr"></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-2">
                                                                            <span>{{ __('Bank') }}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="is_active" class="col-sm-3 control-label">{{ __('Manage Commission') }}</label>
                                                                <div class="col-sm-1 margin-neg-top-05">
                                                                    <input type="hidden" name="is_active" value="0">
                                                                    <div class="switch switch-bg d-inline m-r-10">
                                                                        <input type="checkbox" name="is_active" class="checkActivity" id="is_active" value="1" {{ isset($commission['is_active']) && $commission['is_active'] == 1 ? 'checked' : '' }}>
                                                                        <label for="is_active" class="cr"></label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row dependency">
                                                                <label for="is_category_based" class="col-sm-3 control-label text-left">{{ __('Category based commission') }}</label>
                                                                <div class="col-sm-1 margin-neg-top-05">
                                                                    <input type="hidden" name="is_category_based" value="0">
                                                                    <div class="switch switch-bg d-inline m-r-10">
                                                                        <input type="checkbox" name="is_category_based" id="is_category_based" value="1" {{ isset($commission['is_category_based']) && $commission['is_category_based'] == 1 ? 'checked' : '' }}>
                                                                        <label for="is_category_based" class="cr"></label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row dependency">
                                                                <label for="amount" class="col-sm-3 control-label">{{ __('Default Commission') }}</label>
                                                                <div class="col-9">
                                                                    <div class="col-4 pl-0">
                                                                        <input type="text" min="0" class="form-control positive-float-number form-height" name="amount" id="amount" value="{{ isset($commission['amount']) ? formatCurrencyAmount($commission['amount']) : 0 }}">
                                                                    </div>
                                                                    <div class="mt-2">
                                                                        <span>{{ __('Enter a default commission that works globally for all vendors as a fallback if the commission is not set per vendor or category level. Enter a positive number.') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="chat" class="col-sm-3 control-label">{{ __('Chat') }}</label>
                                                                <div class="col-9 d-flex">
                                                                    <div class="me-3">
                                                                        <input type="hidden" name="chat" value="0">
                                                                        <div class="switch switch-bg d-inline m-r-10">
                                                                            <input type="checkbox" name="chat" class="checkActivity" id="chat" value="1" {{ isset($setting['chat']) && $setting['chat'] == 1 ? 'checked' : '' }}>
                                                                            <label for="chat" class="cr"></label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-2">
                                                                        <span>{{ __('Enable Chat') }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer p-0">
                                                <div class="form-group row">
                                                    <label for="btn_save" class="col-sm-3 control-label"></label>
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn form-submit custom-btn-submit float-right save-button" id="footer-btn">
                                                            <span class="d-none product-spinner spinner-border spinner-border-sm text-secondary" role="status"></span>
                                                            {{ __('Save') }}
                                                        </button>
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
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('public/dist/js/custom/validation.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/condition.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/product-setting.min.js') }}"></script>
@endsection
