<?php

namespace Modules\NGenius\Http\Controllers;

use Modules\NGenius\Http\Requests\AddonRequest;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Modules\Addons\Entities\Addon;
use Modules\NGenius\Entities\NGenius;

class NGeniusController extends Controller
{
    /**
     * Create or update addon settings data
     *
     * @param AddonRequest $request
     * @return Renderable
     */
    public function store(AddonRequest $request)
    {
        NGenius::updateOrCreate(
            ['alias' => config('ngenius.alias')],
            [
                'name' => config('ngenius.name'),
                'instruction' => $request->instruction,
                'status' => $request->status,
                'sandbox' => $request->sandbox,
                'image' => 'thumbnail.png',
                'data' => json_encode(NGenius::formatGatewayData($request))
            ]
        );

        return back()->with(['AddonStatus' => 'success', 'AddonMessage' => __('NGenius settings updated.')]);
    }

    /**
     * View gateway addon
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function viewAddon()
    {
        try {
            $module = (new NGenius)->first()->data;
        } catch (\Exception $e) {
            $module = null;
        }
        $addon = Addon::findOrFail('ngenius');

        return response()->json(
            [
                'html' => view('gateway::partial.form', compact('module', 'addon'))->render(),
                'status' => true
            ],
            200
        );
    }
}
