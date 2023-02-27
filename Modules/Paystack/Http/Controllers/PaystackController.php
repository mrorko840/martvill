<?php

/**
 * @package PaystackController
 * @author TechVillage <support@techvill.org>
 * @contributor Muhammad AR Zihad <[zihad.techvill@gmail.com]>
 * @created 14-2-22
 */

namespace Modules\Paystack\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Modules\Addons\Entities\Addon;
use Modules\Paystack\Entities\Paystack;
use Modules\Paystack\Entities\PaystackBody;
use Modules\Paystack\Http\Requests\PaystackRequest;

class PaystackController extends Controller
{

    public function store(PaystackRequest $request)
    {
        $paystackBody = new PaystackBody($request);

        Paystack::updateOrCreate(
            ['alias' => config('paystack.alias')],
            [
                'name' => config('paystack.name'),
                'instruction' => $request->instruction,
                'status' => $request->status,
                'sandbox' => $request->sandbox,
                'image' => 'thumbnail.png',
                'data' => json_encode($paystackBody)
            ]
        );

        return back()->with(['AddonStatus' => 'success', 'AddonMessage' => __('Paystack settings updated.')]);
    }

    public function edit(Request $request)
    {
        try {
            $module = Paystack::first()->data;
        } catch (\Exception $e) {
            $module = null;
        }
        $addon = Addon::findOrFail('paystack');

        return response()->json(
            [
                'html' => view('gateway::partial.form', compact('module', 'addon'))->render(),
                'status' => true
            ],
            200
        );
    }
}
