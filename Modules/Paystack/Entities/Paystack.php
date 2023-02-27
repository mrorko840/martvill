<?php

/**
 * @package Paystack
 * @author TechVillage <support@techvill.org>
 * @contributor Muhammad AR Zihad <[zihad.techvill@gmail.com]>
 * @created 14-2-22
 */

namespace Modules\Paystack\Entities;

use Modules\Gateway\Entities\Gateway;
use Modules\Paystack\Scope\PaystackScope;

class Paystack extends Gateway
{

    protected $table = 'gateways';

    protected static function booted()
    {
        static::addGlobalScope(new PaystackScope);
    }
}
