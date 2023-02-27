<?php

namespace Modules\Instamojo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Addons\Entities\Addon;
use Modules\Instamojo\Entities\Instamojo;
use Modules\Instamojo\Entities\InstamojoBody;
use Modules\Instamojo\Http\Requests\InstamojoRequest;

class InstamojoController extends Controller
{


    /**
     * Store a newly created resource in storage.
     * @param InstamojoRequest $request
     *
     * @return redirect
     */
    public function store(InstamojoRequest $request)
    {
        $instamojoBody = new InstamojoBody($request);

        Instamojo::updateOrCreate(
            ['alias' => config('instamojo.alias')],
            [
                'name' => config('instamojo.name'),
                'instruction' => $request->instruction,
                'status' => $request->status,
                'sandbox' => $request->sandbox,
                'image' => 'thumbnail.png',
                'data' => json_encode($instamojoBody)
            ]
        );

        return back()->with(['AddonStatus' => 'success', 'AddonMessage' => __('Instamojo settings updated.')]);
    }

    public function edit(Request $request)
    {
        try {
            $module = Instamojo::first()->data;
        } catch (\Exception $e) {
            $module = null;
        }
        $addon = Addon::findOrFail('instamojo');

        return response()->json(
            [
                'html' => view('gateway::partial.form', compact('module', 'addon'))->render(),
                'status' => true
            ],
            200
        );
    }
}
