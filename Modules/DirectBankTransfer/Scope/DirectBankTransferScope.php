<?php

namespace Modules\DirectBankTransfer\Scope;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class DirectBankTransferScope implements Scope
{

    public function apply(Builder $builder, Model $model)
    {
        $builder->where('alias', 'directbanktransfer');
    }
}
