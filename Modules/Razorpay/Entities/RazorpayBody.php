<?php

/**
 * @package RazorpayBody
 * @author TechVillage <support@techvill.org>
 * @contributor Muhammad AR Zihad <[zihad.techvill@gmail.com]>
 * @created 16-2-22
 */

namespace Modules\Razorpay\Entities;

use Modules\Gateway\Entities\GatewayBody;

class RazorpayBody extends GatewayBody
{
    public $apiKey;
    public $apiSecret;
    public $instruction;
    public $status;
    public $sandbox;


    public function __construct($request)
    {
        $this->apiKey = $request->apiKey;
        $this->apiSecret = $request->apiSecret;
        $this->instruction = $request->instruction;
        $this->status = $request->status;
        $this->sandbox = $request->sandbox;
    }
}
