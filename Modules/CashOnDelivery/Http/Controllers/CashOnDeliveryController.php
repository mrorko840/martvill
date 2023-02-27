<?php

namespace Modules\CashOnDelivery\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Addons\Entities\Addon;
use Modules\CashOnDelivery\Entities\CashOnDelivery;
use Modules\CashOnDelivery\Entities\CashOnDeliveryBody;

class CashOnDeliveryController extends Controller
{

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $cashBody = new CashOnDeliveryBody($request);

        CashOnDelivery::updateOrCreate(
            ['alias' => config('cashondelivery.alias')],
            [
                'name' => config('cashondelivery.name'),
                'instruction' => $request->instruction,
                'status' => $request->status,
                'sandbox' => 1,
                'image' => 'thumbnail.png',
                'data' => json_encode($cashBody)
            ]
        );

        return back()->with(['AddonStatus' => 'success', 'AddonMessage' => __('Cash On Delivery settings updated.')]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Request $request)
    {
        try {
            $module = CashOnDelivery::first()->data;
        } catch (\Exception $e) {
            $module = null;
        }
        $addon = Addon::findOrFail('CashOnDelivery');
        return response()->json(
            [
                'html' => view('gateway::partial.form', compact('module', 'addon'))->render(),
                'status' => true
            ],
            200
        );
    }

}
