<?php
/**
 * @package DirectBankTransferController
 * @author tehcvillage <support@techvill.org>
 * @contributor Sakawat Hossain Rony <[sakawat.techvill@gmail.com]>
 * @created 09-01-2023
 */
namespace Modules\DirectBankTransfer\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Addons\Entities\Addon;
use Modules\DirectBankTransfer\Entities\DirectBankTransfer;
use Modules\DirectBankTransfer\Entities\DirectBankTransferBody;

class DirectBankTransferController extends Controller
{
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $cashBody = new DirectBankTransferBody($request);

        DirectBankTransfer::updateOrCreate(
            ['alias' => config('directbanktransfer.alias')],
            [
                'name' => config('directbanktransfer.name'),
                'instruction' => $request->instruction,
                'status' => $request->status,
                'sandbox' => 1,
                'image' => 'thumbnail.png',
                'data' => json_encode($cashBody)
            ]
        );

        return back()->with(['AddonStatus' => 'success', 'AddonMessage' => __('Direct Bank Transfer settings updated.')]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Request $request)
    {
        try {
            $module = DirectBankTransfer::first()->data;
        } catch (\Exception $e) {
            $module = null;
        }
        $addon = Addon::findOrFail('DirectBankTransfer');
        return response()->json(
            [
                'html' => view('gateway::partial.form', compact('module', 'addon'))->render(),
                'status' => true
            ],
            200
        );
    }
}
