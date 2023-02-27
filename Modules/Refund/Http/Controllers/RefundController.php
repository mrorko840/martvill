<?php

/**
 * @package RefundController
 * @author TechVillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 24-02-2022
 */
namespace Modules\Refund\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;


use App\Services\Mail\RefundMailService;
use Modules\Refund\DataTables\RefundDataTable;
use Modules\Refund\Exports\RefundListExport;

use Modules\Refund\Entities\{
    Refund,
    RefundProcess,
};
use App\Http\Controllers\{
    Controller,
    EmailController
};
use Excel;

class RefundController extends Controller
{

    /**
     * Constructor
     *
     * @param EmailController $email
     */
    public function __construct(EmailController $email)
    {
        $this->email = $email;
    }

    /**
     * Refund List
     *
     * @param RefundDataTable $dataTable
     * @return Renderable
     */
    public function index(RefundDataTable $dataTable)
    {
        return $dataTable->render('refund::index');
    }

    /**
     * Edit Refund
     *
     * @param int $id
     * @return \Illuminate\Routing\Redirector
     */
    public function edit($id = null)
    {
        $result = $this->checkExistence($id, 'refunds');
        if ($result['status'] == true) {
            $data['refund'] = Refund::where('id', $id)->with(['user', 'orderDetail', 'refundReason'])->first();
            $data['refundProcesses'] = RefundProcess::where(['refund_id' => $id])->with(['user'])->get();
            return view('refund::edit', $data);
        }

        $this->setSessionValue(['status' => 'fail', 'message' => $result['message']]);
        return back();
    }

    /**
     * Update Refund
     *
     * @param Request $request
     * @return \Illuminate\Routing\Redirector
     */
    public function update(Request $request)
    {
        $result = $this->checkExistence($request->id, 'refunds');
        if ($result['status'] === true) {
            $validator = Refund::updateValidation($request->all(), $request->id);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
            $response = (new Refund)->updateData($request->all(), $request->id);
            if ($response['status'] == 'success' && $request->status != 'Opened') {
                (new RefundMailService)->send($request);
            }
        } else {
            $response = ['status' => 'fail', 'message' => $result['message']];
        }

        $this->setSessionValue($response);
        return redirect()->route('refund.index');
    }

    /**
     * Shop list pdf
     *
     * @return html static page
     */
    public function pdf()
    {
        $data['refunds'] = Refund::getAll();
        return printPDF($data, 'refund_list' . time() . '.pdf', 'refund::pdf', view('refund::pdf', $data), 'pdf');
    }

    /**
     * Shop list csv
     *
     * @return html static page
     */
    public function csv()
    {
        return Excel::download(new RefundListExport, 'refund_list' . time() . '.csv');
    }
}
