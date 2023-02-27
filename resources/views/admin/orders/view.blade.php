@extends('admin.layouts.app')
@section('page_title', __('View :x', ['x' => __('Invoice')]))
@section('css')
    <!-- date range picker css -->
    <link rel="stylesheet" href="{{ asset('public/dist/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}">
    <!-- select2 css -->
    <link rel="stylesheet" href="{{ asset('public/datta-able/plugins/select2/css/select2.min.css') }}">
@endsection
@section('content')

    <!-- Main content -->
    <div class="col-sm-12 order-details-container" id="invoice-view-container">
        {{-- Notification --}}
        <div class="col-md-12 no-print notification-msg-bar smoothly-hide">
            <div class="noti-alert pad">
                <div class="alert bg-dark text-light m-0 text-center">
                    <span class="notification-msg"></span>
                </div>
            </div>
        </div>

        <div>
            <div class="card card-width">
                <div class="card-header">
                    <div class="d-flex flex-md-row flex-column justify-content-md-between">
                        <h6 class="order-details-text text-uppercase"> <a href="{{ route('order.view', $order->id) }}">{{ __('Order') }} </a> {{ __('Details') }}</h6>
                        <div>
                            <span class="order-number">{{ __('Reference') }}</span>
                            <h6 class="order-reference"><span>#{{ $order->reference }}</span></h6>
                        </div>
                    </div>
                    <div class="order-details-body">
                        <div>
                            <div class="status-dropdown col-md-3 mb-4">
                                <p>{{ __('Payment Status') }}</p>
                                <span class="font-bold">{{ __($order->payment_status) }}</span>
                            </div>
                            @if(optional($order->paymentMethod)->gateway != null)
                                <p class="payment-method">{{ __('Payment Method') }} <span class="order-detail-payment-gap">:</span> <span class="payment-type">{{ paymentRenamed(optional($order->paymentMethod)->gateway) }}</span></p>
                            @endif
                            @if($order->paid > 0 && !empty(optional($order->transaction)->transaction_date))
                                <p class="paid-on">{{ __('Paid On') }} <span class="order-detail-paid-gap">:</span> <span class="payment-date">{{ formatDate(optional($order->transaction)->transaction_date) }}</span> @if(!empty($order->TransactionId($order->id)))<a href="{{ route('transaction.edit', $order->TransactionId($order->id)) }}">({{ __('View Transaction') }})</a>@endif</p>
                            @endif

                            <div class="d-md-flex gbs-section">
                                <div class="general-section">
                                    <p class="text-uppercase general">{{ __('General') }}</p>
                                    <div>
                                        <span class="date-created">{{ __('Order Date') }}</span>

                                        <br>
                                        <div class="d-flex date-summary">
                                            <input class="input-date" id="order_date" value='{{ $order->order_date }}' type="text">
                                        </div>
                                        <div class="status-dropdown">
                                            <p>{{ __('Status') }}</p>
                                            @if($order->is_delivery == 1)
                                                <span>{{ __('Completed') }}</span>
                                            @else
                                                <select class="form-control select2" name="status" id="status">
                                                    @foreach ($orderStatus as $status)
                                                        @if ($status->slug == 'cancelled' && strtolower($order->payment_status) != 'paid')
                                                            <option value="{{ $status->id }}" {{ $order->order_status_id == $status->id ? 'selected' : '' }}>{{ $status->name }}</option>
                                                        @endif
                                                        @if ($status->payment_scenario == 'paid')
                                                            <option value="{{ $status->id }}" {{ $order->order_status_id == $status->id ? 'selected' : '' }}>{{ $status->name }}</option>
                                                        @endif
                                                        @if ($status->payment_scenario != 'paid' && $status->slug != 'cancelled' && strtolower($order->payment_status) != 'paid')
                                                            <option value="{{ $status->id }}" {{ $order->order_status_id == $status->id ? 'selected' : '' }}>{{ $status->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                             @endif
                                        </div>
                                        <div class="customer-dropdown">
                                            <p>{{ __('Customers') }}</p>
                                            <select class="form-control select-user select2" name="user_id" id="user_id">
                                                <option {{ $order->user ? 'value=' . $order->user_id : '' }}>{{ optional($order->user)->name ?? __('Guest') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                @php
                                    $shippingAddress = $order->getShippingAddress();
                                    $billingAddress = $order->getBillingAddress();
                                @endphp
                                <div class="billing-section">
                                    <div class="billing-icon-container text-uppercase">
                                        <p class="billing">{{ __('Billing Address') }}</p>
                                    </div>
                                    <div class="billing-information-container">
                                        <p class="billing-information"> {{ __('Name') }}: <span> {{ $billingAddress->first_name }} {{ $billingAddress->last_name }}</span> </p>
                                        <p class="billing-information"> {{ __('Email') }}: <span> {{ $billingAddress->email }} </span> </p>
                                        <p class="billing-information"> {{ __('Phone') }}: <span> {{ $billingAddress->phone }} </span> </p>
                                        <p class="billing-information"> {{ __('Address') }}: <span> {{ $billingAddress->address_1 }} {{ !empty($billingAddress->address_2) ? ", " . $billingAddress->address_2 : '' }}, {{ $billingAddress->city }} </span> </p>
                                        <p class="billing-information"> {{ __('Postcode') . "/" . __('ZIP') }}: <span> {{ $billingAddress->zip }} </span> </p>
                                        <p class="billing-information"> {{ __('State') }}: <span> {{ $billingAddress->state }} </span> </p>
                                        <p class="billing-information"> {{ __('Country') }}: <span> {{ $billingAddress->country }} </span> </p>
                                    </div>
                                </div>

                                <div class="shipping-section">
                                    <div class="shipping-icon-container text-uppercase">
                                        <p class="shipping">{{ __('Shipping Address') }}</p>
                                    </div>

                                    <div class="billing-information-container">
                                        <p class="billing-information"> {{ __('Name') }}: <span> {{ $shippingAddress->first_name . " " . $shippingAddress->last_name }} </span> </p>
                                        <p class="billing-information"> {{ __('Address') }}: <span> {{ $shippingAddress->address_1 }} {{ !empty($shippingAddress->address_2) ? ", " . $shippingAddress->address_2 : '' }}, {{ $shippingAddress->city }} </span> </p>
                                        <p class="billing-information"> {{ __('Postcode') . "/" . __('ZIP') }}: <span> {{ $shippingAddress->zip }} </span> </p>
                                        <p class="billing-information"> {{ __('State') }}: <span> {{ $shippingAddress->state }} </span> </p>
                                        <p class="billing-information"> {{ __('Country') }}: <span> {{ $shippingAddress->country }} </span> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-width">
                <div class="col-sm-12 form-tabs">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="row">
                                <div class="container" id="printTable">
                                    <div>
                                        <div>
                                            <div class="row m-0 order-info-table-container">
                                                <div class="col-sm-12 order-info-table">
                                                    <div class="table-responsive order-details-table-responsive">
                                                        <table class="table invoice-detail-table">
                                                            <thead>
                                                                @if(isActive('Shop'))
                                                                    @php $shop = true; @endphp
                                                                @endif
                                                                <tr class="thead-default order-info-thead">
                                                                    <th>{{__('')}}</th>
                                                                    <th>{{ __('Products') }}</th>
                                                                    <th>{{ __('SKU') }}</th>
                                                                    <th>{{ __('Status') }}</th>
                                                                    <th>{{ __('Cost') }}</th>
                                                                    <th>{{ __('Qty') }}</th>
                                                                    <th>{{ __('Total') }}</th>
                                                                    <th>{{ __('Refund') }}</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                @foreach ($orderDetails as $details)
                                                                    @if (!is_null($details[0]->vendor_id))
                                                                        <tr>
                                                                            <td colspan="5" class="pl-31p">{{ optional($details[0]->vendor)->name }}</td>
                                                                        </tr>
                                                                    @endif

                                                                    @foreach ($details as $detail)
                                                                        @php
                                                                            if (isActive('Refund')) {
                                                                                $orderDeliverId = \App\Models\Order::getFinalOrderStatus();
                                                                            }

                                                                            $opName = '';
                                                                            if ($detail->payloads != null) {
                                                                                $option = (array)json_decode($detail->payloads);
                                                                                $itemCount = count($option);
                                                                                $i = 0;
                                                                                foreach ($option as $key => $value) {
                                                                                    $opName .= $key . ': ' . $value . (++$i == $itemCount ? '' : ', ');
                                                                                }
                                                                            }

                                                                            $productInfo = $orderAction->getProductInfo($detail);
                                                                        @endphp
                                                                        <tr>
                                                                            <td></td>
                                                                            <td>
                                                                                <div class="d-flex">
                                                                                    <div class="order-itm-img-con">
                                                                                        <img src="{{ $productInfo['image'] }}" alt="{{ __('Image') }}">
                                                                                    </div>
                                                                                    <div class="order-item-name-attribute">
                                                                                        <h6>
                                                                                            <a class="order-item-name mt-9 d-block" href="{{ $productInfo['url'] }}" title="{{ $detail->product_name }}">
                                                                                                {{ trimWords($detail->product_name, 25) }}
                                                                                                <br>
                                                                                            </a>
                                                                                        </h6>
                                                                                        <p class="order-item-attr">{{ $opName }} </p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span title="{{ optional($detail->product)->sku }}">{{ trimWords(optional($detail->product)->sku, 10) }}</span>
                                                                            </td>
                                                                            @php $totalRefund = $detail->refunds()->where('status','Accepted')->sum('quantity_sent') @endphp
                                                                            <td>
                                                                                @if ($totalRefund != $detail->quantity)
                                                                                    @if($detail->is_delivery == 1)
                                                                                        <span class="d-block mt-22p">{{ __('Completed') }}</span>
                                                                                    @else
                                                                                        <select class="form-select status order-status  {{ $detail->is_delivery == 1 ? 'delivery' : '' }}" name="status" data-id = "{{ $detail->id }}" {{ $detail->is_delivery == 1 ? 'disabled' : '' }}>
                                                                                            @foreach ($orderStatus as $status)
                                                                                                @if (strtolower(optional($detail->orderStatus)->payment_scenario) == 'unpaid' && $status->payment_scenario == 'unpaid')
                                                                                                    <option value="{{ $status->id }}" {{ $status->id == $detail->order_status_id ? 'selected' : '' }}>{{ $status->name }}</option>
                                                                                                @endif
                                                                                                @if ($status->payment_scenario == 'paid')
                                                                                                    <option value="{{ $status->id }}" {{ $detail->order_status_id == $status->id ? 'selected' : '' }}>{{ $status->name }}</option>
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </select>
                                                                                    @endif
                                                                                @else
                                                                                    <span class="d-block mt-22p">{{ __('Refunded') }}</span>
                                                                                @endif
                                                                            </td>
                                                                            <td>{{ formatCurrencyAmount($detail->price) }}</td>
                                                                            <td class="d-flex">
                                                                                <span class="order-q-icon">x</span>
                                                                                {{ floor(formatCurrencyAmount($detail->quantity)) }}
                                                                            </td>
                                                                            <td>{{ formatNumber($detail->price * $detail->quantity, optional($order->currency)->symbol) }}</td>
                                                                            @if ($detail->isRefundable() && preference('order_refund'))
                                                                                <td>
                                                                                    @if ($detail->is_delivery == 1 && $totalRefund != $detail->quantity)
                                                                                        <a href="javascript:void(0)" class="d-block mt-22p" id="refundApply" data-detailId = "{{ $detail->id }}" data-qty = {{ $detail->quantity -  $totalRefund }}><span>{{ __('Apply') }}</span></a>
                                                                                    @endif
                                                                                </td>
                                                                            @endif
                                                                        </tr>
                                                                    @endforeach
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 invoice-table-container ">
                                                    <table class="table table-responsive invoice-table invoice-total invoice-total-customize table-spa">
                                                        <tbody class="total-amount-design">
                                                            <tr>
                                                                <th>{{ __('Sub Total') }} :</th>
                                                                <td class="text-right">{{ formatNumber(($order->total + $order->other_discount_amount) - ($order->shipping_charge + $order->tax_charge), optional($order->currency)->symbol) }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="py-3">{{ __('Shipping') }} {{ !is_null($order->shipping_title) ? "( ". $order->shipping_title . " )" : null }} :</th>
                                                                <td class="py-3 text-right">{{ formatNumber($order->shipping_charge, optional($order->currency)->symbol) }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>{{ __('Tax') }} :</th>
                                                                <td class="text-right">{{ formatNumber($order->tax_charge, optional($order->currency)->symbol) }}</td>
                                                            </tr>
                                                            @if($order->other_discount_amount > 0 && isActive('Coupon'))
                                                            <tr>
                                                                <th class="py-3">{{ __('Discount') }} :</th>
                                                                <td class="py-3 text-right">{{ formatNumber($order->other_discount_amount, optional($order->currency)->symbol) }}</td>
                                                            </tr>
                                                            @endif
                                                            <tr class="text-info">
                                                                <td>
                                                                    <hr />
                                                                    <h5 class="order-grand-total">{{ __('Grand Total') }} :</h5>
                                                                </td>
                                                                <td>
                                                                    <hr />
                                                                    <h5 class="order-grand-currency">{{ formatNumber($order->total, optional($order->currency)->symbol) }}</h5>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-width download-permission-container">
                <div class="product-permissions-header accordion cursor_pointer">
                    <span>{{ __('Downloadable Product Permission') }}</span>
                    <span class="drop-down-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="8" viewBox="0 0 13 10" fill="none">
                            <path d="M6.80496 9.84648L12.7031 2.23935C13.3926 1.35009 12.8043 -9.56008e-07 11.7273 -9.68852e-07L1.27274 -1.09352e-06C0.195723 -1.10636e-06 -0.39263 1.35009 0.296859 2.23935L6.19504 9.84648C6.35375 10.0512 6.64626 10.0512 6.80496 9.84648Z" fill="white"/>
                            </svg>
                    </span>
                </div>
                <br>
                <div id="download_div">
                    @php
                        $downloadData = $order->download_data;
                    @endphp
                    @if(is_array($downloadData) && !empty($downloadData))
                        @foreach ($order->download_data as $key => $data)
                            @if($data['is_accessible'] == 1)
                                <div class="col-sm-12 download_data" id="downloadData-{{ $data['id'] }}">
                                    <div class="row px-3">
                                        <div class="col-md-2 mt-2 mt-md-0">
                                            <span>{{ __('Download limit') }}</span>
                                            <div class="d-flex">
                                                <input type="hidden" name="id" value="{{ $data['id'] }}">
                                                <input value="{{ $data['download_limit'] }}" name="download_limit" class="form-control inputFieldDesign" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-2 mt-2 mt-md-0">
                                            <span>{{ __('Download expiry') }}</span>
                                            <div class="d-flex">
                                            <input value="{{ $data['download_expiry'] }}" name="download_expiry" class="form-control inputFieldDesign" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-2 mt-md-0">
                                            <span>{{ __('Customer download link') }}</span>
                                            <div class="d-flex">
                                            <a href="javascript:void(0)" class="download_copy_link btn-default p-1" data-link = "{{ route('site.downloadProduct',['link' => \Crypt::encrypt($data['link']),'file' => $data['id'].",".$order['id']]) }}">{{ __("Copy Link") }}</a>
                                            </div>
                                        </div>
                                        <input type="hidden" name="link" value="{{ $data['link'] }}">
                                        <input type="hidden" name="download_times" value="{{ $data['download_times'] }}">
                                        <input type="hidden" name="is_accessible" value="{{ $data['is_accessible'] }}">
                                        <input type="hidden" name="vendor_id" value="{{ $data['vendor_id'] }}">
                                        <input type="hidden" name="name" value="{{ $data['name'] }}">
                                        <input type="hidden" name="f_name" value="{{ $data['f_name'] }}">
                                        <div class="col-md-3 mt-2 mt-md-0">
                                            <span>{{ __('Access') }}</span>
                                            <div class="d-flex">
                                                <a href="javascript:void(0)" class="revoke_access btn-default p-2" data-id="{{ $data['id'] }}">{{ __("Revoke access") }}</a>
                                            </div>
                                        </div>
                                        <div class="col-md-2 mt-2 mt-md-0">
                                            <span>{{ __('Downloaded') }}</span>
                                            <div class="d-flex">
                                                {{ __(':x Times', ['x' => $data['download_times']]) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
                <div class="product-permissions-body">
                    <div class="row">
                        <div class="status-dropdown col-sm-10 col-12 mb-2 mb-md-0">
                            <select class="form-control select2" id="search_products" multiple name="grant_access[]">
                            </select>
                        </div>
                        <button class="grant-access col-sm-2 col-12 py-2 py-md-0" id="grant_access">{{ __('Grant Access') }}</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="order-actions-container">
            <div class="card">
                <div class="order-sections-header accordion cursor_pointer">
                    <span>{{ __('Order') }} {{ __('Actions') }}</span>
                    <span class="order-icon drop-down-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="5" viewBox="0 0 7 5" fill="none">
                            <path d="M3.33579 4.92324L0.159846 1.11968C-0.211416 0.675046 0.105388 -4.81444e-07 0.685319 -5.06793e-07L6.31468 -7.52861e-07C6.89461 -7.7821e-07 7.21142 0.675045 6.84015 1.11968L3.66421 4.92324C3.57875 5.02559 3.42125 5.02559 3.33579 4.92324Z" fill="#2C2C2C"/>
                        </svg>
                    </span>
                </div>
                <div class="order-sections-body">
                    <div class="d-flex order-action-parent">
                        <select class="form-control select2" name="order_action" id="orderAction">
                            <option value="" selected="">{{ __('Choose an action..') }}</option>
                            <option value="1">{{ __('Email invoice / order details to customer') }}</option>
                            <option value="3">{{ __('Resend Order Email (Vendor)') }}</option>
                        </select>
                        <div class="order-mail">
                            <span id="order_action_btn">
                                <i class="feather icon-chevron-right fa-2x"></i>
                            </span>
                        </div>
                    </div>
                    <div class="trash-update border-top">
                        <button class="w-100" id="update-order" class="mt-9">{{ __('Update') }}</button>
                    </div>
                </div>
            </div>

            @php
                $orderDeliverId = \App\Models\Order::getFinalOrderStatus();
                $deliveryDate = $order->deliveryDate($order->id, $orderDeliverId);
            @endphp
            @if(!empty($deliveryDate))
                <div class="card">
                    <div class="order-sections-header accordion cursor_pointer">
                        <span>{{ __('Delivery Time') }}</span>
                        <span class="order-icon drop-down-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="5" viewBox="0 0 7 5" fill="none">
                                <path d="M3.33579 4.92324L0.159846 1.11968C-0.211416 0.675046 0.105388 -4.81444e-07 0.685319 -5.06793e-07L6.31468 -7.52861e-07C6.89461 -7.7821e-07 7.21142 0.675045 6.84015 1.11968L3.66421 4.92324C3.57875 5.02559 3.42125 5.02559 3.33579 4.92324Z" fill="#2C2C2C"/>
                            </svg>
                        </span>
                    </div>
                    <div class="order-delivery-sections-body">
                        <div>
                            <span class="order-date-text">{{ __('Delivery date') }}</span>
                            <input id="deliveryDate" type="text" class="form-control inputFieldDesign" value="{{ $deliveryDate }}">
                            <br>
                        </div>
                    </div>
                </div>
            @endif

            @if(count($orderStatusHistories) > 0)
                <div class="card">
                    <div class="order-sections-header accordion cursor_pointer">
                        <span>{{ __('Status history') }}</span>
                        <span class="order-icon drop-down-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="5" viewBox="0 0 7 5" fill="none">
                                <path d="M3.33579 4.92324L0.159846 1.11968C-0.211416 0.675046 0.105388 -4.81444e-07 0.685319 -5.06793e-07L6.31468 -7.52861e-07C6.89461 -7.7821e-07 7.21142 0.675045 6.84015 1.11968L3.66421 4.92324C3.57875 5.02559 3.42125 5.02559 3.33579 4.92324Z" fill="#2C2C2C"/>
                            </svg>
                        </span>
                    </div>
                    <div class="order-sections-body">
                        @foreach ($orderStatusHistories->groupBy('product_id') as $product_id => $histories)
                            <div class="card">
                                <div class="order-sections-header accordion cursor_pointer">
                                    <span class="text-dark">{{ trimWords($histories->first()->lineItem->product_name, 25) }}</span>
                                    <span class="order-icon drop-down-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="5" viewBox="0 0 7 5" fill="none">
                                            <path d="M3.33579 4.92324L0.159846 1.11968C-0.211416 0.675046 0.105388 -4.81444e-07 0.685319 -5.06793e-07L6.31468 -7.52861e-07C6.89461 -7.7821e-07 7.21142 0.675045 6.84015 1.11968L3.66421 4.92324C3.57875 5.02559 3.42125 5.02559 3.33579 4.92324Z" fill="#2C2C2C"/>
                                        </svg>
                                    </span>
                                </div>
                                <div class="order-sections-body">
                                    @foreach ($histories as $history)
                                        <div class="order-notes">
                                            <span class="underline cursor_default">{{ __('Order status changed to :x by :y', ['x' => optional($history->orderStatus)->name, 'y' => optional($history->user)->name ?? __('Automatic')]) }} .</span>
                                        </div>
                                        <div class="date-delete-container mb-3">
                                            <span class="date underline cursor_default">{{ $history->format_created_at }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <div class="card">
                <div class="order-sections-header accordion cursor_pointer">
                    <span>{{ __('Note history') }}</span>
                    <span class="order-icon drop-down-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="5" viewBox="0 0 7 5" fill="none">
                            <path d="M3.33579 4.92324L0.159846 1.11968C-0.211416 0.675046 0.105388 -4.81444e-07 0.685319 -5.06793e-07L6.31468 -7.52861e-07C6.89461 -7.7821e-07 7.21142 0.675045 6.84015 1.11968L3.66421 4.92324C3.57875 5.02559 3.42125 5.02559 3.33579 4.92324Z" fill="#2C2C2C"/>
                        </svg>
                    </span>
                </div>
                <div class="order-sections-body order-notes-container">
                    <div class="notes max-h-350 overflow-auto">
                        @if(count($orderNotes) > 0)
                            @foreach ($orderNotes as $history)
                                <div class="order-notes">
                                    <span>{{ $history->note }}</span>
                                </div>
                                <div class="date-delete-container">
                                    <span class="date">{{ $history->format_created_at }}</span>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="add-note-container">
                        <div class="add-note">
                            <span class="add-note-text">{{ __('Note') }}</span>
                            <span title="{{ __('Add your personal note.') }}" class="add-note-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 6C12 9.31371 9.31371 12 6 12C2.68629 12 0 9.31371 0 6C0 2.68629 2.68629 0 6 0C9.31371 0 12 2.68629 12 6ZM6.66667 10C6.66667 10.3682 6.36819 10.6667 6 10.6667C5.63181 10.6667 5.33333 10.3682 5.33333 10C5.33333 9.63181 5.63181 9.33333 6 9.33333C6.36819 9.33333 6.66667 9.63181 6.66667 10ZM6 1.33333C4.52724 1.33333 3.33333 2.52724 3.33333 4H4.66667C4.66667 3.26362 5.26362 2.66667 6 2.66667H6.06287C6.76453 2.66667 7.33333 3.23547 7.33333 3.93713V4.27924C7.33333 4.62178 7.11414 4.92589 6.78918 5.03421C5.91976 5.32402 5.33333 6.13765 5.33333 7.05409V8.66667H6.66667V7.05409C6.66667 6.71155 6.88586 6.40744 7.21082 6.29912C8.08024 6.00932 8.66667 5.19569 8.66667 4.27924V3.93713C8.66667 2.49909 7.50091 1.33333 6.06287 1.33333H6Z" fill="#898989"/>
                                </svg>
                            </span>
                        </div>
                        <div class="add-note-text-field">
                            <textarea class="form-control" name="order_note" id="order_note" rows="3"></textarea>
                            <div class="trash-update">
                                <button class="w-100" id="updateNote">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="order-sections-header accordion cursor_pointer">
                    <span>{{ __('Create PDF') }}</span>
                    <span class="order-icon drop-down-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="5" viewBox="0 0 7 5" fill="none">
                            <path d="M3.33579 4.92324L0.159846 1.11968C-0.211416 0.675046 0.105388 -4.81444e-07 0.685319 -5.06793e-07L6.31468 -7.52861e-07C6.89461 -7.7821e-07 7.21142 0.675045 6.84015 1.11968L3.66421 4.92324C3.57875 5.02559 3.42125 5.02559 3.33579 4.92324Z" fill="#2C2C2C"/>
                        </svg>
                    </span>
                </div>
                <div class="order-pdf-btn">
                    <a href="{{ route('invoice.print', $order->id) }}?type=pdf"><button class="pdf-inv-btn">{{ __('PDF Invoice') }}</button></a>
                </div>
            </div>
            <div class="card">
                <div class="order-sections-header accordion cursor_pointer">
                    <span>{{ __('Track Code') }}</span>
                    <span class="order-icon drop-down-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="5" viewBox="0 0 7 5" fill="none">
                            <path d="M3.33579 4.92324L0.159846 1.11968C-0.211416 0.675046 0.105388 -4.81444e-07 0.685319 -5.06793e-07L6.31468 -7.52861e-07C6.89461 -7.7821e-07 7.21142 0.675045 6.84015 1.11968L3.66421 4.92324C3.57875 5.02559 3.42125 5.02559 3.33579 4.92324Z" fill="#2C2C2C"/>
                        </svg>
                    </span>
                </div>
                <div class="order-pdf-btn">
                    <p>{{ __('Track code') }}: <span class="text-dark">{{ isset($order->getMeta()['track_code']) ? $order->getMeta()['track_code'] : __('Unavailable') }}</span></p>
                </div>
            </div>
        </div>

        <div id="refund-store" class="modal fade display_none" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ __('Refund') }} &nbsp; </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('site.orderRefund') }}" method="post" class="form-horizontal">
                            @csrf
                            <input type="hidden" name="quantity_sent" id="quantity_sent" value="1">
                            <input type="hidden" name="order_detail_id" id="order_detail_id">
                            <input type="hidden" name="type" value="admin">
                            <div class="form-group row mb-3">
                                <label class="col-3 control-label" for="inputEmail3">{{ __('Quantity') }}</label>
                                <div class="col-6 d-flex align-items-center">
                                    <a href="javascript:void(0)" class="text-center px-3 py-2 border" id="refundQtyDec"><span class="inline-block">-</span></a>
                                    <div class="px-3" id="refundQty">1</div>
                                    <a href="javascript:void(0)" class="text-center px-3 py-2 border" id="refundQtyInc"><span class="inline-block">+</span></a>
                                </div>
                            </div>

                            <div class="form-group row mt-3 mt-md-0">
                                <label class="col-3 control-label pr-0" for="inputEmail3">{{ __('Reason') }}</label>
                                <div class="col-8">
                                    <select class="form-control select2" name="refund_reason_id">
                                        @foreach ($refundReasons as $reason)
                                            <option value="{{ $reason->id }}">{{ $reason->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mt-3">
                                <label class="col-3 control-label pr-0" for="is_default"></label>
                                <div class="col-8">
                                    <textarea name="comment" class="form-control" placeholder="{{ __('Please let me know, why are you want to refund this item.') }}" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="form-group row mt-3 mt-md-0">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn custom-btn-submit float-right">{{ __('Submit') }}</button>
                                    <button type="button" class="btn custom-btn-cancel all-cancel-btn float-right" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        var orderId = "{{ $order->id }}";
        var paymentStatus = "{{ $order->payment_status }}";
        var finalOrderStatus = "{{ $finalOrderStatus }}";
        var orderUrl = "{{ route('order.update') }}";
        var orderView = "admin";
    </script>
    <script src="{{ asset('public/datta-able/plugins/sweetalert/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/common.min.js') }}"></script>
    <!-- select2 JS -->
    <script src="{{ asset('public/datta-able/plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- date range picker Js -->
    <script src="{{ asset('public/dist/js/moment.min.js') }}"></script>
    <script src="{{ asset('public/dist/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/invoice.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/jquery.blockUI.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/order.min.js') }}"></script>
@endsection
