<?php

namespace Modules\NGenius\Entities;

use Modules\Gateway\Entities\Gateway;
use Illuminate\Database\Eloquent\Builder;
use Modules\NGenius\Http\Requests\AddonRequest;

class NGenius extends Gateway
{
    protected $table = 'gateways';

    protected static function booted()
    {
        static::addGlobalScope('alias', function (Builder $builder) {
            $builder->where('alias', 'ngenius');
        });
    }

    /**
     * Format gateway data in an array
     *
     * @param AddonRequest $request
     * @return array
     */
    public static function formatGatewayData(AddonRequest $request)
    {
        return [
            'apiKey'          => $request->apiKey,
            'outletReference' => $request->outletReference,
            'instruction'     => $request->instruction,
            'sandbox'         => $request->sandbox,
            'status'          => $request->status
        ];
    }
}
