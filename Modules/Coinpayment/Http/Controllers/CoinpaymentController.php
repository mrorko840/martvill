<?php

namespace Modules\Coinpayment\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Addons\Entities\Addon;
use Modules\Coinpayment\Entities\Coinpayment;
use Modules\Coinpayment\Entities\CoinpaymentBody;
use Modules\Coinpayment\Http\Requests\CoinpaymentRequest;

class CoinpaymentController extends Controller
{

    /**
     * Store a newly created resource in storage.
     * @param CoinpaymentRequest $request
     * @return Renderable
     */
    public function store(CoinpaymentRequest $request)
    {

        $request->merge(['currencies' => commaStringArray($request->currencies)]);

        $coinpaymentBody = new CoinpaymentBody($request);

        Coinpayment::updateOrCreate(
            ['alias' => config('coinpayment.alias')],
            [
                'name' => config('coinpayment.name'),
                'instruction' => $request->instruction,
                'status' => $request->status,
                'sandbox' => $request->sandbox,
                'image' => 'thumbnail.png',
                'data' => json_encode($coinpaymentBody)
            ]
        );

        return back()->with(['AddonStatus' => 'success', 'AddonMessage' => __('CoinPayment settings updated.')]);
    }

    public function edit(Request $request)
    {
        try {
            $module = Coinpayment::first()->data;
        } catch (\Exception $e) {
            $module = null;
        }
        $addon = Addon::findOrFail('coinpayment');

        return response()->json(
            [
                'html' => view('gateway::partial.form', compact('module', 'addon'))->render(),
                'status' => true
            ],
            200
        );
    }
}
