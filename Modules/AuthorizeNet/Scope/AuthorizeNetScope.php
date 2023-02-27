<?php

/**
 * @package Authorize net
 * @author TechVillage <support@techvill.org>
 * @contributor Md. Mostafijur Rahman <[mostafijur.techvill@gmail.com]>
 * @created 08-01-23
 */

namespace Modules\AuthorizeNet\Scope;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class AuthorizeNetScope implements Scope
{

    public function apply(Builder $builder, Model $model)
    {
        $builder->where('alias', 'authorizenet');
    }
}
