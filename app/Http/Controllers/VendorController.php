<?php
/**
 * @package VendorController
 * @author TechVillage <support@techvill.org>
 * @contributor Sakawat Hossain Rony <[sakawat.techvill@gmail.com]>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 17-08-2021
 * @modified 29-09-2021
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\VendorListDataTable;
use App\Exports\VendorListExport;
use App\Http\Controllers\Controller;
use App\Services\Mail\UserMailService;
use Modules\Shop\Http\Models\Shop;
use Modules\Commission\Http\Models\Commission;
use App\Http\Resources\AjaxSelectSearchResource;

use App\Http\Requests\Admin\{
    StoreVendorRequest, UpdateVendorRequest
};
use App\Models\{
    Role,
    User,
    Vendor,
    RoleUser,
    VendorUser
};
use Excel, Str;

class VendorController extends Controller
{
    /**
     * Constructor
     * @param EmailController $email
     */
    public function __construct(EmailController $email)
    {
        $this->email = $email;
    }

    /**
     * Vendor List
     * @param VendorListDataTable $dataTable
     * @return mixed
     */
    public function index(VendorListDataTable $dataTable)
    {

        return $dataTable->render('admin.vendors.index');
    }

    /**
     * Vendor create
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $data['roles'] = Role::getAll()->where('type', 'vendor');
        $data['commission'] = Commission::getAll()->first();

        return view('admin.vendors.create', $data);
    }

    /**
     * Store vendor
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreVendorRequest $request)
    {
        $response = $this->messageArray(__('Invalid Request'), 'fail');
        if ($request->isMethod('post')) {

            $request['raw_password'] = $request->password;
            $request['password'] = \Hash::make($request->password);
            $request['email'] = validateEmail($request->email) ? strtolower($request->email) : null;

            if ($this->c_p_c()) {
                Session::flush();
                return view('errors.installer-error', ['message' => __("This product is facing license validation issue.<br>Please verify your purchase code from <a style=\"color:#fcca19\" href=\"". route('purchase-code-check', ['bypass' => 'purchase_code']) ."\">here</a>.")]);
            }

            try {
                \DB::beginTransaction();
                $data['vendorData'] = $request->only('name', 'email', 'phone', 'formal_name', 'website', 'status', 'sell_commissions');
                $data['vendorMetaData'] = $request->only('description', 'cover_photo', 'vendor_logo');
                $vendorId = (new Vendor)->store($data);
                $request['vendor_id'] = $vendorId;
                (new Shop)->store($request->only('vendor_id', 'name', 'email', 'website', 'alias', 'phone', 'address'));

                $request['activation_code'] = NULL;
                if ($request->status <> 'Active') {
                    $request['activation_code'] = Str::random(10);
                }

                // Store user information
                $id = (new User)->store($request->only('name', 'email', 'password', 'activation_code', 'status'));

                if (!empty($id)) {
                    $roleAll = Role::getAll();
                    $roles = [];

                    foreach ($request->role_ids as $role_id) {
                        $roles[] = ['user_id' => $id, 'role_id' => $role_id];
                        $role = $roleAll->where('id', $role_id)->first();
                    }

                    if (!empty($roles)) {
                        (new RoleUser)->store($roles);
                    }

                    $request['role'] = $role;
                    $request['user_id'] = $id;
                    (new VendorUser)->store($request->only('vendor_id', 'user_id', 'status'));

                    if (isset($request->send_mail) && $request->status != 'Inactive' && !empty($request['email'])) {
                        $emailResponse = (new UserMailService)->send($request);

                        if ($emailResponse['status'] == false) {
                            \DB::rollBack();
                            return redirect()->back()->withInput()->withErrors(['fail' => $emailResponse['message']]);
                        }
                    }
                }
                \DB::commit();
                $response = $this->messageArray(__('The :x has been successfully saved.', ['x' => __('Vendor')]), 'success');

            } catch (\Exception $e) {
                \DB::rollBack();
                $response['status'] = 'fail';
                $response['message'] = $e->getMessage();
            }
        }
        $this->setSessionValue($response);

        return redirect()->route('vendors.index');
    }

    /**
     * Edit vendor
     * @param $id
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function edit(Request $request, $id)
    {
        $vendor = Vendor::getAll()->where('id', $id)->first();

        if (empty($vendor)) {
            $response = $this->messageArray( __(':x does not exist.', ['x' => __('Vendor')]), 'fail');
            $this->setSessionValue($response);
            return redirect()->route('vendors.index');
        }

        $data['commission'] = Commission::getAll()->first();
        $data['vendors'] = $vendor;
        $data['shops'] = Shop::getAll()->where('vendor_id', $id);
        $data['shop_exist'] = isset($request->shop) && !empty($request->shop) ? $request->shop : null;

        return view('admin.vendors.edit', $data);
    }

    /**
     * Update Vendor
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateVendorRequest $request, $id)
    {
        $response = $this->messageArray(__('Invalid Request'), 'fail');
        $result = $this->checkExistence($id, 'vendors');

        if ($result['status'] === true) {
            $data['vendorData'] = $request->only('name', 'email', 'phone', 'formal_name', 'website', 'status', 'sell_commissions');
            $data['vendorMetaData'] = $request->only('description', 'cover_photo', 'vendor_logo');
            (new Vendor)->updateVendor($data, $id);
            $response = $this->messageArray(__('The :x has been successfully saved.', ['x' => __('Vendor')]), 'success');

        } else {
            $response['message'] = $result['message'];
        }
        $this->setSessionValue($response);

        if ($request->shop) {
            return redirect()->route('shop.index');
        }

        return redirect()->route('vendors.index');
    }

    /**
     * Remove Vendor
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request, $id)
    {
        $response = $this->messageArray(__('Invalid Request'), 'fail');

        if ($request->isMethod('post')) {
            $result = $this->checkExistence($id, 'vendors');

            if ($result['status'] === true) {
                $response = (new Vendor)->remove($id);
            } else {
                $response['message'] = $result['message'];
            }
        }

        $this->setSessionValue($response);

        return redirect()->route('vendors.index');
    }

    /**
     * Vendor list pdf
     * @return html static page
     */
    public function pdf()
    {
        $data['vendors'] = Vendor::getAll();

        return printPDF($data, 'vendors_lists' . time() . '.pdf', 'admin.vendors.list_pdf', view('admin.vendors.list_pdf', $data), 'pdf');
    }

    /**
     * Vendor list csv
     * @return html static page
     */
    public function csv()
    {
        return Excel::download(new VendorListExport(), 'vendor_lists' . time() . '.csv');
    }

    /**
     * Find vendors
     *
     * @param Request $request
     * @return json
     */
    public function findVendor(Request $request)
    {
        $vendors = Vendor::whereLike('name', $request->q)->limit(10)->get();
        return AjaxSelectSearchResource::collection($vendors);
    }

    public function c_p_c() {
		p_c_v();
		return false;
    }
}
