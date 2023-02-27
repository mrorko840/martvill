<?php

namespace Modules\DirectBankTransfer\Entities;

use Modules\DirectBankTransfer\Scope\DirectBankTransferScope;
use Modules\Gateway\Entities\Gateway;

class DirectBankTransfer extends Gateway
{
    protected $table = 'gateways';
    protected $appends = ['image_url'];

    protected static function booted()
    {
        static::addGlobalScope(new DirectBankTransferScope);
    }
}
