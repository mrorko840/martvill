<?php

namespace Modules\Coinbase\Entities;

use Modules\Gateway\Entities\Gateway;
use Modules\Coinbase\Scope\CoinbaseScope;

class Coinbase extends Gateway
{

    protected $table = 'gateways';

    protected static function booted()
    {
        static::addGlobalScope(new CoinbaseScope);
    }
}
