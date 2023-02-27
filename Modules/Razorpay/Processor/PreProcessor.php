<?php

/**
 * @package Preprocessor
 * @author TechVillage <support@techvill.org>
 * @contributor Muhammad AR Zihad <[zihad.techvill@gmail.com]>
 * @created 16-2-22
 */

namespace Modules\Razorpay\Processor;

use Modules\Gateway\Facades\GatewayHelper;
use Modules\Razorpay\Entities\Razorpay;
use Razorpay\Api\Api;


class PreProcessor
{
    private $razor = null;
    private $data = null;

    public function getOrder($key = null, $razor = null)
    {
        $this->setup($key, $razor);
        return $this->paymentData($this->order());
    }


    public function setup($key = null, $razor = null)
    {
        if (!$this->razor) {
            $this->razor = $this->razorData($razor);
        }
        if (!$this->data) {
            $this->data = $this->fetchData($key);
        }
    }


    public function fetchData($key)
    {
        if (!$this->data) {
            return GatewayHelper::getPurchaseData($key);
        }
        return $this->data;
    }


    public function razorData($razor = null)
    {
        if (!$this->razor && !$this->razor = $razor) {
            return Razorpay::firstWhere('alias', 'razorpay')->data;
        }
        return $this->razor;
    }


    public function api($apiKey = null, $apiSecret = null)
    {
        if ($apiKey && $apiSecret) {
            return new Api($apiKey, $apiSecret);
        }
        return new Api($this->razor->apiKey, $this->razor->apiSecret);
    }


    public function order()
    {
        return $this->api()->order->create($this->orderData());
    }


    public function orderData()
    {
        return
            [
                'receipt' => $this->data->code,
                'amount' => round($this->data->total * 100, 0),
                'currency' => $this->data->currency_code
            ];
    }


    public function paymentData($order)
    {
        $this->setOrderId($order['id']);
        return [
            "key" => $this->razor->apiKey,
            "amount" => $order['amount'],
            "notes" => [
                "merchant_order_id" => $order['receipt'],
            ],
            "order_id" => $order['id'],
            'callback_url' => route('gateway.callback', withOldQueryIntegrity(['gateway' => config('razorpay.alias')])),
            'redirect' => true
        ];
    }


    private function setOrderId($id)
    {
        session(['razor_order_id' => $id]);
    }

    public function getOrderId()
    {
        return session('razor_order_id');
    }
}
