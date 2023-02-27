<?php

/**
 * @package Authorize net
 * @author TechVillage <support@techvill.org>
 * @contributor Md. Mostafijur Rahman <[mostafijur.techvill@gmail.com]>
 * @created 08-01-2023
 */

namespace Modules\AuthorizeNet\Entities;

use Modules\AuthorizeNet\Scope\AuthorizeNetScope;
use Modules\Gateway\Entities\Gateway;


class AuthorizeNet extends Gateway
{

    protected $table = 'gateways';
    protected $appends = ['image_url'];

    protected static function booted()
    {
        static::addGlobalScope(new AuthorizeNetScope);
    }
}
