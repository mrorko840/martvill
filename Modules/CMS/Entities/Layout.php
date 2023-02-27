<?php

namespace Modules\CMS\Entities;

use App\Models\Model;
use App\Traits\ModelTraits\Cachable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Layout extends Model
{
    use HasFactory, Cachable;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\CMS\Database\factories\LayoutFactory::new();
    }

    public function layoutType()
    {
        return $this->belongsTo(\Modules\CMS\Entities\LayoutType::class);
    }

    public function components()
    {
        return $this->hasMany(\Modules\CMS\Entities\Component::class);
    }
}
