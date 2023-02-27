<?php

/**
 * @package SslCommerz
 * @author techvillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 29-10-2022
 */

namespace Modules\SslCommerz\Entities;

use Modules\Gateway\Entities\Gateway;
use Modules\SslCommerz\Scope\SslCommerzScope;

class SslCommerz extends Gateway
{

    protected $table = 'gateways';

    /**
    * Global scope for SSL Commerz
    *
    * @return void
    */
    protected static function booted()
    {
        static::addGlobalScope(new SslCommerzScope);
    }
}
