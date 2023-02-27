<?php
/**
 * @package CheckPaymentsController
 * @author tehcvillage <support@techvill.org>
 * @contributor Sakawat Hossain Rony <[sakawat.techvill@gmail.com]>
 * @created 09-01-2023
 */
namespace Modules\CheckPayments\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Addons\Entities\Addon;
use Modules\CheckPayments\Entities\CheckPayments;
use Modules\CheckPayments\Entities\CheckPaymentsBody;

class CheckPaymentsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $cashBody = new CheckPaymentsBody($request);

        CheckPayments::updateOrCreate(
            ['alias' => config('checkpayments.alias')],
            [
                'name' => config('checkpayments.name'),
                'instruction' => $request->instruction,
                'status' => $request->status,
                'sandbox' => 1,
                'image' => 'thumbnail.png',
                'data' => json_encode($cashBody)
            ]
        );

        return back()->with(['AddonStatus' => 'success', 'AddonMessage' => __('Check Payments settings updated.')]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Request $request)
    {
        try {
            $module = CheckPayments::first()->data;
        } catch (\Exception $e) {
            $module = null;
        }
        $addon = Addon::findOrFail('CheckPayments');
        return response()->json(
            [
                'html' => view('gateway::partial.form', compact('module', 'addon'))->render(),
                'status' => true
            ],
            200
        );
    }
}
