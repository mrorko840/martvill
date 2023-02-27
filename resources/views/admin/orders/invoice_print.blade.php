<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ __('Invoice') }}</title>
    <link rel="stylesheet" href="{{ asset('public/bootstrap/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/dist/css/pdf-invoice.min.css') }}">
</head>
<body>
    <div id="invoice-view-container">
        <div id="printTable">
            <span>
                <img class="martvill-logo" src="{{ $logo }}">
            </span>
            <div>
                <div class="invoice-side">
                    <p class="order-invoice">{{ __('Order Invoice') }}</p>
                    <p class="order-reference">#{{ $order->reference }}</p>
                </div>
                <div class="address-side">
                    @if (isset($user) && !empty($user->name))
                        <p class="name">{{ $user->name }}</p>
                    @endif
                    @if (isset($user) && !empty($user->phone))
                        <p class="phone">{{ $user->phone }}</p>
                    @endif
                    @if (isset($user) && !empty($user->email))
                        <p class="email">{{ $user->email }}</p>
                    @endif
                </div>
                <div class="clear-both"></div>
            </div>
            <div>
                <table class="table">
                    <thead class="thead">
                        @if (isActive('Shop'))
                            @php $shop = true; @endphp
                        @endif
                        <tr>
                            <th colspan="2">{{ __('Product Name') }}</th>
                            @if ($shop)
                                <th>{{ __('Shop Name') }}</th>
                            @endif
                            <th>{{ __('Quantity') }}</th>
                            <th>{{ __('Amount') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orderDetails as $detail)
                            @php
                                $opName = '';
                                if ($detail->payloads != null) {
                                    $option = (array) json_decode($detail->payloads);
                                    $itemCount = count($option);
                                    $i = 0;
                                    foreach ($option as $key => $value) {
                                        $opName .= $key . ': ' . $value . (++$i == $itemCount ? '' : ', ');
                                    }
                                }
                                $productInfo = $orderAction->getProductInfo($detail);
                            @endphp
                            <tr>
                                <td class="td">
                                    <img class="product-image"
                                        src="{{ $productInfo['image'] }}" />
                                </td>
                                <td class="product-name-td">
                                    <p> {{ $detail->product_name }} <br>
                                        {{ !empty($opName) ? '( ' . $opName . ' )' : '' }} </p>
                                    <p class="op-name">
                                        {{ $opName }} </p>
                                </td>
                                @if ($shop)
                                    <td class="td">
                                        <p class="vendor-name">{{ optional($detail->vendor)->name }}</p>
                                    </td>
                                @endif
                                <td class="td">
                                    <p class="product-details">{{ formatCurrencyAmount($detail->quantity) }}</p>
                                </td>
                                <td class="td">
                                    <p class="product-details">
                                        {{ formatNumber($detail->price * $detail->quantity, optional($order->currency)->symbol) }}
                                    </p>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div>
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="width-380"> </td>
                            <td class="footer-information">{{ __('Sub Total') }} :</td>
                            <td class="width-80"></td>
                            <td class="footer-information">
                                {{ formatNumber($order->total + $order->other_discount_amount - ($order->shipping_charge + $order->tax_charge), optional($order->currency)->symbol) }}
                            </td>
                        </tr>
                        <tr>
                            <td class="width-380"> </td>
                            <td class="footer-information">{{ __('Shipping') }}{{ !is_null($order->shipping_title) ? '( ' . $order->shipping_title . ' )' : null }}:
                            </td>
                            <td class="width-80"></td>
                            <td class="footer-information">
                                {{ formatNumber($order->shipping_charge, optional($order->currency)->symbol) }}
                            </td>
                        </tr>
                        <tr>
                            <td class="width-380"> </td>
                            <td class="footer-information">{{ __('Tax') }} :</td>
                            <td class="width-80"></td>
                            <td class="footer-information">{{ formatNumber($order->tax_charge, optional($order->currency)->symbol) }}
                            </td>
                        </tr>
                        @if ($order->other_discount_amount > 0 && isActive('Coupon'))
                            <tr>
                                <td class="width-380"> </td>
                                <td class="footer-information">{{ __('Discount') }} :</td>
                                <td class="width-80"></td>
                                <td class="footer-information">{{ formatNumber($order->other_discount_amount, optional($order->currency)->symbol) }}
                                </td>
                            </tr>
                        @endif
                        <tr>
                            <td class="width-380"> </td>
                            <td class="footer-information border-top">{{ __('Total') }} :</td>
                            <td class="footer-information border-top width-80"></td>
                            <td class="footer-information border-top">
                                {{ formatNumber($order->total, optional($order->currency)->symbol) }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="delivery-side">
                <p class="delivery-details">{{ __('Delivery Details') }}</p>
                <div>
                    @php
                        $shippingAddress = $order->getShippingAddress();
                        $billingAddress = $order->getBillingAddress();
                    @endphp
                    <div class="addresses">
                        <p class="shipping-address">{{ __('Shipping Address') }} :</p>
                        <p class="shipping-information">
                            {{ $shippingAddress->first_name . ' ' . $shippingAddress->last_name }}</p>
                        <p class="shipping-information">{{ __('Street Address') }}:
                            {{ $shippingAddress->address_1 }}{{ !empty($shippingAddress->address_2) ? ', ' . $shippingAddress->address_2 : '' }}
                        </p>
                        <p class="shipping-information">{{ __('City') }}: {{ $shippingAddress->city }}</p>
                        <p class="shipping-information">
                            {{ __('Postcode') . ' / ' . __('ZIP') }}:{{ $shippingAddress->zip }}
                        </p>
                        <p class="shipping-information">{{ __('Country') }}: {{ $shippingAddress->country }}</p>
                        <p class="shipping-information">
                            {{ __('State') . ' / ' . __('Province') }}:{{ $shippingAddress->state }}
                        </p>
                        @if (!empty($shippingAddress->phone))
                            <p class="shipping-information">{{ __('Phone') }}: {{ $shippingAddress->phone }}</p>
                        @endif

                    </div>
                    <div class="payment">
                        <div>
                            <p class="shipping-address">{{ __('ESTIMATED DELIVERY TIME') }}</p>
                            <p class="shipping-information">{{ __('Office Days') }}</p>
                        </div>
                        <div>
                            <p class="shipping-address">{{ __('PAYMENT') }}</p>
                            @if (!empty(optional($order->paymentMethod)->gateway))
                                <p class="shipping-information">{{ optional($order->paymentMethod)->gateway }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="clear-both"></div>
                </div>
            </div>
            <p class="keep-in-touch">{{ __('Keep in touch')}}</p>
            <p class="concern-queries">{{ __('If you have any queries, concerns or suggestions')}},</p>
            @if (preference('company_email'))
                <p class="concern-queries mt-0">{{ __('please email us')}} : <span class="color-blue">{{ preference('company_email') }}</span> </p>
            @endif
            @if (preference('company_phone'))
                <p class="helpline">{{ __('Helpline')}} : <span class="color-blue">{{ preference('company_phone') }}</span></p>
            @endif
            <p class="copy-right"> © {{ date("Y") }}, {{ preference('company_name') }}. {{ __('All rights reserved.') }}</p>
        </div>
    </div>
</body>

</html>
@if ($type == 'print')
    <script src="{{ asset('public/dist/js/custom/site/order-invoice.min.js') }}"></script>
@endif
