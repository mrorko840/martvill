<?php

/**
 * @package RefundProcessController
 * @author TechVillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 25-05-2022
 */
namespace Modules\Refund\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Modules\Refund\Http\Requests\RefundProcessRequest;

use Modules\Refund\Entities\{
    RefundProcess
};

class RefundProcessController extends Controller
{
    /**
     * Store Refund Process
     * @param RefundProcessRequest $request
     * @return \Illuminate\Routing\Redirector
     */
    public function process(RefundProcessRequest $request)
    {
        $this->setSessionValue((new RefundProcess)->store($request->validated()));
        return redirect()->back();
    }
}
