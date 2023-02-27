<?php

namespace App\Models;

use App\Traits\ModelTraits\Cachable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductMeta extends MetaData
{
    use Cachable;

    protected $table = 'products_meta';

    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'key',
        'value',
        'type',
    ];
}
