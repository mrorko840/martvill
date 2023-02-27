<?php

namespace App\Http\Resources\Order;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Gateway\Redirect\GatewayRedirect;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request = [])
    {
        return [
            'id' => $this->id,
            'parent_id' => 0,
            'number' => $this->id,
            'order_key' => $this->reference,
            'status' => $this->orderStatus->name,
            'is_delivery' => $this->is_delivery,
            'currency' => optional($this->currency)->name,
            'created_at' => timeZoneFormatDate($this->created_at) . ' ' . timeZoneGetTime($this->created_at),
            'updated_at' => timeZoneFormatDate($this->updated_at) . ' ' . timeZoneGetTime($this->updated_at),
            'discount_total' => formatCurrencyAmount($this->other_discount_amount),
            'shipping_total' => formatCurrencyAmount($this->shipping_charge),
            'shipping_tax' => formatCurrencyAmount(0),
            'sub_total' => formatCurrencyAmount(($this->total + $this->other_discount_amount) - ($this->shipping_charge + $this->tax_charge)),
            'total' => formatCurrencyAmount($this->total),
            'total_tax' => formatCurrencyAmount($this->tax_charge),
            'prices_include_tax' => false,
            'payment_status' => $this->payment_status,
            'customer_id' => $this->user_id,
            'customer_note' => $this->note,
            'billing' => new BillingAddressResource($this->getBillingAddress()),
            'shipping' => new ShippingAddressResource($this->getShippingAddress()),
            'payment' => new PaymentResource($this->whenLoaded('paymentMethod')),
            'line_items' => ProductResource::collection($this->whenLoaded('orderDetails')),
            'tax_lines' => new TaxResource([]),
            'shipping_lines' => new ShippingResource([]),
            'status_history' => StatusHistoryResource::collection($this->statusHistories),
            'coupon_lines' => CouponResource::collection($this->whenLoaded('couponRedeems')),
            'meta' => $this->getMeta(),
            'payment_link' => $this->payment_status == 'Unpaid' ? GatewayRedirect::generateGuestPaymentLink($this->reference) : null
        ];
    }
}
