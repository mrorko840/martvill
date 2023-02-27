<div class="card option-value-rowid ui-sortable-handle transition-none impact_parent common_c">
    <div class="mini-form-holder d-flex d-flx-n align-items-center pr-30p relative">
        <div
            class="mr-42p mr-19-res mt-10-res div_h virtual-child conditional-dom not-variable-dom not-grouped-dom not-external-dom {{ isset($product) && $product->isSimpleProduct() ? '' : 'd-none' }}">
            <div class="checkbox checkbox-primary p-0 d-inline w-space align-items-center float-left">
                <input type="hidden" name="meta_virtual" value="0">
                <input type="checkbox" name="meta_virtual" {{ isset($product) && $product->isVirtual() ? 'checked' : '' }}
                    class="has_impact" value="1" data-name="virtual" id="Virtual">
                <label for="Virtual" class="crv sp-title label-res d-unset">{{ __('Virtual') }}</label>
            </div>
        </div>

        <div
            class="mr-42p div_h download-child conditional-dom not-variable-dom not-grouped-dom not-external-dom {{ isset($product) && $product->isSimpleProduct() ? '' : 'd-none' }}">
            <div class="checkbox checkbox-primary m-0 d-inline w-space align-items-center">
                <input type="hidden" name="meta_downloadable" value="0">
                <input data-bs-toggle="collapse" href="#collapseExampl" type="checkbox" name="meta_downloadable"
                    class="has_impact virtual-product" data-name="downloadable" value="1"
                    {{ isset($product) && $product->isDownloadable() ? 'checked' : '' }} id="Downloadable">
                <label for="Downloadable"
                    class="crv sp-title label-res d-unset ml-10-res">{{ __('Downloadable') }}</label>
            </div>
        </div>

        <div class="w-276p mt-15-res select-child">
            @if (preference('simple_product') ||
                preference('variable_product') ||
                preference('grouped_product') ||
                preference('affiliate_product'))

                <select name="type" class="form-control select2 product-type">
                    @ifSettings('simple_product')
                        <option {{ isset($product) && $product->isSimpleProduct() ? 'selected' : '' }}
                            value="{{ \App\Enums\ProductType::$Simple }}">{{ __('Simple Product') }}</option>
                    @endifSettings

                    @ifSettings('variable_product')
                        <option {{ isset($product) && $product->isVariableProduct() ? 'selected' : '' }}
                            value="{{ \App\Enums\ProductType::$Variable }}">{{ __('Variable Product') }}</option>
                    @endifSettings

                    @ifSettings('grouped_product')
                        <option {{ isset($product) && $product->isGroupedProduct() ? 'selected' : '' }}
                            value="{{ \App\Enums\ProductType::$Grouped }}">{{ __('Grouped Product') }}</option>
                    @endifSettings

                    @ifSettings('affiliate_product')
                        <option {{ isset($product) && $product->isExternalProduct() ? 'selected' : '' }}
                            value="{{ \App\Enums\ProductType::$External }}">{{ __('External/Affiliate Product') }}</option>
                    @endifSettings
                </select>
            @else
            <select name="type" class="form-control select2 product-type">
                <option selected value="{{ \App\Enums\ProductType::$Simple }}">{{ __('Simple Product') }}</option>
            </select>
            @endif

        </div>
    </div>

    <div class="order-sec-head cursor-pointer d-flex d-flx-n align-items-center position-relative px-3-res px-32p h-66p head-click"
        data-bs-toggle="collapse" href="#product_data">
        <div class="mt-15-res product-res">
            <span class="add-title">{{ __('Product Data') }}</span>
        </div>
        <svg class="cursor-move position-absolute right-58p" width="16" height="11" viewBox="0 0 16 11"
            fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="16" height="1" fill="#898989"></rect>
            <rect y="5" width="16" height="1" fill="#898989"></rect>
            <rect y="10" width="16" height="1" fill="#898989"></rect>
        </svg>
        <span class="toggle-btn icon-collapse position-absolute right-25p">
            <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M4.18767 0.0921111L7.81732 4.65639C8.24162 5.18994 7.87956 6 7.21678 6L0.783223 6C0.120445 6 -0.241618 5.18994 0.182683 4.65639L3.81233 0.092111C3.91 -0.0307037 4.09 -0.0307036 4.18767 0.0921111Z"
                    fill="#2C2C2C"></path>
            </svg>
        </span>
    </div>

    <div id="product_data" class="collapse show txt-enable">
        <ul class="nav nav-tabs cus-tab custom-scroll" id="myTab" role="tablist">
            <li
                class="nav-item conditional-dom not-variable-dom not-grouped-dom {{ isset($product) && ($product->isVariableProduct() || $product->isGroupedProduct()) ? 'd-none' : '' }}">
                <a class="nav-link {{ isset($product) && ($product->isGroupedProduct() || $product->isVariableProduct()) ? '' : 'active' }}"
                    id="tabs-one" data-bs-toggle="tab" href="#tabs-a" role="tab" aria-controls="tabs-a"
                    aria-selected="true">{{ __('General') }}</a>
            </li>
            @ifSettings('manage_stock')
            <li class="nav-item conditional-dom">
                <a class="nav-link inventory {{ isset($product) && ($product->isGroupedProduct() || $product->isVariableProduct()) ? 'active' : '' }}"
                    id="tabs-two" data-bs-toggle="tab" href="#tabs-b" role="tab" aria-controls="tabs-b"
                    aria-selected="false">{{ __('Inventory') }}</a>
            </li>
            @endifSettings
            <li class="nav-item off_impact conditional-dom not-grouped-dom not-external-dom {{ isset($product) && ($product->isVirtual() || $product->isDownloadable()) ? 'd-none' : '' }}" data-name="virtual">
                <a class="nav-link" id="tabs-three" data-bs-toggle="tab" href="#tabs-c" role="tab"
                    aria-controls="tabs-c" aria-selected="false">{{ __('Shipping & Delivery') }}</a>
            </li>

            <li class="nav-item conditional-dom not-grouped-dom {{ isset($product) && $product->isGroupedProduct() ? 'd-none' : '' }}">
                <a class="nav-link" id="tabs-4" data-bs-toggle="tab" href="#tabs-d" role="tab"
                    aria-controls="tabs-d" aria-selected="false">{{ __('Service') }}</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" id="tabs-6" data-bs-toggle="tab" href="#tabs-f" role="tab"
                    aria-controls="tabs-f" aria-selected="false">{{ __('Attributes') }}</a>
            </li>
            <li
                class="nav-item conditional-dom not-simple-dom not-grouped-dom not-external-dom {{ isset($product) && $product->isVariableProduct() ? '' : 'd-none' }}">
                <a class="nav-link"
                    id="tabs-7" data-bs-toggle="tab" href="#tabs-g" role="tab"
                    aria-controls="tabs-g" aria-selected="false">{{ __('Variations') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ !preference('manage_stock') && isset($product) && ($product->isGroupedProduct() || $product->isVariableProduct()) ? 'active' : '' }}"
                    id="tabs-8" data-bs-toggle="tab" href="#tabs-h" role="tab" aria-controls="tabs-h"
                    aria-selected="false">{{ __('Advanced') }}</a>
            </li>
        </ul>
        <div class="tab-content shadow-none bg-transparent blockable loder-content" id="myTabContent">
            @include('admin.products.sections.sub.general-tab')
            @ifSettings('manage_stock')
            @include('admin.products.sections.sub.inventory-tab')
            @endifSettings
            @include('admin.products.sections.sub.shipping-tab')

            @include('admin.products.sections.sub.warranty-tab')

            @include('admin.products.sections.sub.attributes-tab')

            @include('admin.products.sections.sub.variations-tab')

            @include('admin.products.sections.sub.advanced-tab')
        </div>

    </div>
</div>
