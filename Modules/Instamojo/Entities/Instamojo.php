<?php

namespace Modules\Instamojo\Entities;

use Modules\Gateway\Entities\Gateway;
use Modules\Instamojo\Scope\InstamojoScope;

class Instamojo extends Gateway
{

    protected $table = 'gateways';

    protected static function booted()
    {
        static::addGlobalScope(new InstamojoScope);
    }
}
