<?php

/**
 * @package SslCommerzBody
 * @author techvillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 29-10-22
 */

namespace Modules\SslCommerz\Entities;

use Modules\Gateway\Entities\GatewayBody;

class SslCommerzBody extends GatewayBody
{
    public $apiKey;
    public $apiSecret;
    public $instruction;
    public $status;
    public $sandbox;

    /**
     * Constructor
     *
     * @param object $request
     * @return void
     */
    public function __construct($request)
    {
        $this->apiKey = $request->apiKey;
        $this->apiSecret = $request->apiSecret;
        $this->instruction = $request->instruction;
        $this->status = $request->status;
        $this->sandbox = $request->sandbox;
    }
}
