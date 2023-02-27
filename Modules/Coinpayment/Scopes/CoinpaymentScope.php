<?php

namespace Modules\Coinpayment\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class CoinpaymentScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->where('alias', 'coinpayment');
    }
}
