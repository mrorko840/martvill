<?php

namespace Modules\Coinpayment\Entities;

use Modules\Gateway\Entities\Gateway;
use Modules\Coinpayment\Scopes\CoinpaymentScope;

class Coinpayment extends Gateway
{
    protected $table = 'gateways';

    protected static function booted()
    {
        static::addGlobalScope(new CoinpaymentScope);
    }
}
