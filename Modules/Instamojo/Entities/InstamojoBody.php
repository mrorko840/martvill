<?php

namespace Modules\Instamojo\Entities;

use Modules\Gateway\Entities\GatewayBody;

class InstamojoBody extends GatewayBody
{
    public $apiKey;
    public $authToken;
    public $instruction;
    public $sandbox;
    public $status;


    public function __construct($request)
    {
        $this->apiKey = $request->apiKey;
        $this->authToken = $request->authToken;
        $this->instruction = $request->instruction;
        $this->status = $request->status;
        $this->sandbox = $request->sandbox;
    }
}
