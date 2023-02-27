<?php

namespace Modules\DirectBankTransfer\Entities;

use Modules\Gateway\Entities\GatewayBody;

class DirectBankTransferBody extends GatewayBody
{
    public $status;


    public function __construct($request)
    {
        $this->instruction = $request->instruction;
        $this->status = $request->status;
    }
}
