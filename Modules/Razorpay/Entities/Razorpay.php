<?php

/**
 * @package Razorpay
 * @author TechVillage <support@techvill.org>
 * @contributor Muhammad AR Zihad <[zihad.techvill@gmail.com]>
 * @created 16-2-22
 */

namespace Modules\Razorpay\Entities;

use Modules\Gateway\Entities\Gateway;
use Modules\Razorpay\Scope\RazorpayScope;

class Razorpay extends Gateway
{

    protected $table = 'gateways';

    protected static function booted()
    {
        static::addGlobalScope(new RazorpayScope);
    }
}
