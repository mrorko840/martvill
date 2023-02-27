<?php

/**
 * @package RazorpFacade
 * @author TechVillage <support@techvill.org>
 * @contributor Muhammad AR Zihad <[zihad.techvill@gmail.com]>
 * @created 16-2-22
 */

namespace Modules\Razorpay\Facades;

use Illuminate\Support\Facades\Facade;

class RazorFacade extends Facade
{
    /**
     * Cart alias
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'RazorHandler';
    }
}
