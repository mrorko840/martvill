<?php

/**
 * @package SslCommerzScope
 * @author techvillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 29-10-22
 */

namespace Modules\SslCommerz\Scope;

use Illuminate\Database\Eloquent\{
    Builder, Model, Scope
};

class SslCommerzScope implements Scope
{

    /**
     * Scope Apply
     * 
     * @param Builder $builder
     * @param Model $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        $builder->where('alias', 'sslcommerz');
    }
}
