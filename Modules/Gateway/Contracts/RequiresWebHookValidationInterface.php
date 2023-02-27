<?php

namespace Modules\Gateway\Contracts;

use Illuminate\Http\Request;

interface RequiresWebHookValidationInterface
{
    public function validatePayment(\Illuminate\Http\Request $request);
}
