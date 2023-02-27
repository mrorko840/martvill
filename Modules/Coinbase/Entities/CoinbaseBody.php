<?php

namespace Modules\Coinbase\Entities;

use Modules\Gateway\Entities\GatewayBody;

class CoinbaseBody extends GatewayBody
{
    public $apiKey;
    public $instruction;
    public $status;
    public $sandbox;


    public function __construct($request)
    {
        $this->apiKey = $request->apiKey;
        $this->instruction = $request->instruction;
        $this->sandbox = $request->sandbox;
        $this->status = $request->status;
    }
}
