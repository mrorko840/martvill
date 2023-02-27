<?php

/**
 * @package PaystackScope
 * @author TechVillage <support@techvill.org>
 * @contributor Muhammad AR Zihad <[zihad.techvill@gmail.com]>
 * @created 14-2-22
 */

namespace Modules\Paystack\Scope;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class PaystackScope implements Scope
{

    public function apply(Builder $builder, Model $model)
    {
        $builder->where('alias', 'paystack');
    }
}
