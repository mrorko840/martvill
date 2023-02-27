<?php

namespace Modules\CheckPayments\Scope;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class CheckPaymentsScope implements Scope
{

    public function apply(Builder $builder, Model $model)
    {
        $builder->where('alias', 'checkpayments');
    }
}
