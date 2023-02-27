<?php

/**
 * @package RazorpayController
 * @author TechVillage <support@techvill.org>
 * @contributor Muhammad AR Zihad <[zihad.techvill@gmail.com]>
 * @created 16-2-22
 */

namespace Modules\Razorpay\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Addons\Entities\Addon;
use Modules\Razorpay\Http\Requests\RazorpayRequest;
use Modules\Razorpay\Entities\RazorpayBody;
use Modules\Razorpay\Entities\Razorpay;

class RazorpayController extends Controller
{

    public function store(RazorpayRequest $request)
    {

        $razorBody = new RazorpayBody($request);

        Razorpay::updateOrCreate(
            ['alias' => config('razorpay.alias')],
            [
                'name' => config('razorpay.name'),
                'instruction' => $request->instruction,
                'status' => $request->status,
                'sandbox' => $request->sandbox,
                'image' => 'thumbnail.png',
                'data' => json_encode($razorBody)
            ]
        );
        return back()->with(['AddonStatus' => 'success', 'AddonMessage' => __('RazorPay settings updated.')]);
    }


    public function edit(Request $request)
    {
        try {
            $module = Razorpay::first()->data;
        } catch (\Exception $e) {
            $module = null;
        }
        $addon = Addon::findOrFail('razorpay');

        return response()->json(
            [
                'html' => view('gateway::partial.form', compact('module', 'addon'))->render(),
                'status' => true
            ],
            200
        );
    }
}
