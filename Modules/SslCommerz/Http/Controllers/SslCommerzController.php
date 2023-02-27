<?php

/**
 * @package SslCommerzController
 * @author techvillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 29-10-2022
 */

namespace Modules\SslCommerz\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Addons\Entities\Addon;
use Modules\SslCommerz\Http\Requests\SslCommerzRequest;
use Modules\SslCommerz\Entities\{
    SslCommerz, SslCommerzBody
};

class SslCommerzController extends Controller
{

    /**
     * Store SslCommerz credential
     *
     * @param SslCommerzRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SslCommerzRequest $request)
    {

        $sslCommerzBody = new SslCommerzBody($request);

        SslCommerz::updateOrCreate(
            ['alias' => config('sslcommerz.alias')],
            [
                'name' => config('sslcommerz.name'),
                'instruction' => $request->instruction,
                'status' => $request->status,
                'sandbox' => $request->sandbox,
                'image' => 'thumbnail.png',
                'data' => json_encode($sslCommerzBody)
            ]
        );
        return back()->with(['AddonStatus' => 'success', 'AddonMessage' => __('SSL Commerz settings updated.')]);
    }

    /**
     * Edit SslCommerz credential
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        try {
            $module = SslCommerz::first()->data;
        } catch (\Exception $e) {
            $module = null;
        }
        $addon = Addon::findOrFail('sslcommerz');

        return response()->json(
            [
                'html' => view('gateway::partial.form', compact('module', 'addon'))->render(),
                'status' => true
            ],
            200
        );
    }
}
