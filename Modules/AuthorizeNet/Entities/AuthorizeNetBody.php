<?php

/**
 * @package Authorize net
 * @author TechVillage <support@techvill.org>
 * @contributor Md. Mostafijur Rahman <[mostafijur.techvill@gmail.com]>
 * @created 08-01-2023
 */

namespace Modules\AuthorizeNet\Entities;

use Modules\Gateway\Entities\GatewayBody;

class AuthorizeNetBody extends GatewayBody
{
    public $merchantLoginId;
    public $merchantTransactionKey;
    public $instruction;
    public $status;
    public $sandbox;


    public function __construct($request)
    {
        $this->merchantLoginId = $request->merchantLoginId;
        $this->merchantTransactionKey = $request->merchantTransactionKey;
        $this->instruction = $request->instruction;
        $this->status = $request->status;
        $this->sandbox = $request->sandbox;
    }
}
