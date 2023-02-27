<?php
/**
 * @package FlutterwaveController
 * @author TechVillage <support@techvill.org>
 * @contributor Kabir Ahmed <[kabir.techvill@gmail.com]>
 * @created 11-05-2022
 */
namespace Modules\Flutterwave\Http\Controllers;

use Modules\Flutterwave\Entities\Flutterwave;
use Modules\Addons\Entities\Addon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Flutterwave\Entities\FlutterwaveBody;
use Modules\Flutterwave\Http\Requests\FlutterwaveRequest;

class FlutterwaveController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param StripeRequest $request
     *
     * @return mixed
     */
    public function store(FlutterwaveRequest $request)
    {
        $flutterwaveBody = new FlutterwaveBody($request);
        Flutterwave::updateOrCreate(
            ['alias' => 'flutterwave'],
            [
                'name' => 'Flutterwave',
                'instruction' => $request->instruction,
                'status' => $request->status,
                'image' => 'thumbnail.png',
                'data' => json_encode($flutterwaveBody)
            ]
        );

        return back()->with(['AddonStatus' => 'success', 'AddonMessage' => __('Flutterwave settings updated.')]);
    }


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
            $module = Flutterwave::first()->data;
        } catch (\Exception $e) {
            $module = null;
        }
        $addon = Addon::findOrFail('flutterwave');
        return response()->json(
            [
                'html' => view('gateway::partial.form', compact('module', 'addon'))->render(),
                'status' => true
            ],
            200
        );
    }
}
