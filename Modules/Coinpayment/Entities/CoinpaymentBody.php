<?php

namespace Modules\Coinpayment\Entities;


class CoinpaymentBody
{
    public $merchantId;
    public $privateKey;
    public $publicKey;
    public $currencies = [];
    public $instruction;
    public $status;
    public $sandbox;


    public function __construct($request)
    {
        $this->merchantId = $request->merchantId;
        $this->privateKey = $request->privateKey;
        $this->publicKey = $request->publicKey;
        $this->currencies = $request->currencies;
        $this->instruction = $request->instruction;
        $this->sandbox = $request->sandbox;
        $this->status = $request->status;
    }
}
