<?php

/**
 * @package FlutterwaveScope
 * @author TechVillage <support@techvill.org>
 * @contributor Kabir Ahmed <[kabir.techvill@gmail.com]>
 * @created 16-2-22
 */

namespace Modules\Flutterwave\Scope;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class FlutterwaveScope implements Scope
{

    public function apply(Builder $builder, Model $model)
    {
        $builder->where('alias', 'flutterwave');
    }
}
