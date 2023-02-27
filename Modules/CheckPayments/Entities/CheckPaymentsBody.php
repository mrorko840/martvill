<?php

namespace Modules\CheckPayments\Entities;

use Modules\Gateway\Entities\GatewayBody;

class CheckPaymentsBody extends GatewayBody
{
    public $status;


    public function __construct($request)
    {
        $this->instruction = $request->instruction;
        $this->status = $request->status;
    }
}
