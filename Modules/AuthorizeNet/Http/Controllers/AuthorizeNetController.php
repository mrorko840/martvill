<?php

/**
 * @package AuthorizeNetController
 * @author TechVillage <support@techvill.org>
 * @contributor Md. Mostafijur Rahman <[mostafijur.techvill@gmail.com]>
 * @created 08-01-2023
 */

namespace Modules\AuthorizeNet\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Addons\Entities\Addon;
use Modules\AuthorizeNet\Entities\AuthorizeNet;
use Modules\AuthorizeNet\Entities\AuthorizeNetBody;
use Modules\AuthorizeNet\Http\Requests\AuthorizeNetRequest;

class AuthorizeNetController extends Controller
{
    
    /**
     * Returns form for the edit modal
     *
     * @param \Illuminate\Http\Request
     *
     * @return JsonResponse
     */
    public function edit(Request $request)
    {
        try {
            $module = AuthorizeNet::first()->data;
        } catch (\Exception $e) {
            $module = null;
        }

        $addon = Addon::findOrFail('authorizenet');

        return response()->json(
            [
                'html' => view('gateway::partial.form', compact('module', 'addon'))->render(),
                'status' => true
            ],
            200
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AuthorizeNetRequest $request
     *
     * @return mixed
     */
    public function store(AuthorizeNetRequest $request)
    {
        $authorizeNetBody = new AuthorizeNetBody($request);
        AuthorizeNet::updateOrCreate(
            ['alias' => 'authorizenet'],
            [
                'name' => 'AuthorizeNet',
                'instruction' => $request->instruction,
                'status' => $request->status,
                'sandbox' => $request->sandbox,
                'image' => 'thumbnail.png',
                'data' => json_encode($authorizeNetBody)
            ]
        );

        return back()->with(['AddonStatus' => 'success', 'AddonMessage' => __('Authorize Net settings updated.')]);
    }


}
