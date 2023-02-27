<?php
/**
 * @package ProductSettingController
 * @author TechVillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 13-06-2022
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Preference;
use Illuminate\Http\Request;
use Modules\Commission\Http\Models\Commission;
use App\Models\WithdrawalMethod;

class ProductSettingController extends Controller
{


    public function __construct(Request $request)
    {
        //this middleware should be for POST request only
        if ($request->isMethod('post')) {
            $this->middleware('checkForDemoMode')->only('general', 'inventory', 'vendor');
        }
    }


    /**
     * Product general setting
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function general(Request $request)
    {
        if ($request->isMethod('GET')) {
            $data['list_menu'] = 'general';
            $data['setting'] = Preference::getAll()->whereIn('category', ['product_general', 'product_inventory', 'product_vendor'])->pluck('value', 'field')->toArray();
            $data['commission'] = Commission::first();
            $data['withdrawalMethods'] = WithdrawalMethod::getAll();
            return view('admin.product_settings.index', $data);
        }

        $response = $this->storeData($request->except('_token'), 'product_general');
        return $response;
    }

    /**
     * Product inventory setting
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function inventory(Request $request)
    {
        $response = $this->storeData($request->except('_token'), 'product_inventory');
        return $response;
    }

    /**
     * Product vendor setting
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function vendor(Request $request)
    {
        $response = $this->storeData($request->only('show_sold_by', 'is_publish_product'), 'product_vendor');
        if ($response['status'] == 'success') {
            if (!(new Commission)->storeOrUpdate($request->only('amount', 'is_active', 'is_category_based', 'order_status_id'))) {
                $response = $this->messageArray(__('Commission update failed.'), 'fail');
            }
            (new WithdrawalMethod())->updateData($request->only('paypal', 'bank'));
            $this->storeData($request->only('chat'), 'product_vendor');
        }
        return $response;
    }

    /**
     * Store product setting
     * @param  array $request
     * @param string $category
     * @return $response;
     */
    private function storeData($request, $category)
    {
        $response = $this->messageArray(__('Invalid Request'), 'fail');

        $i = 0;
        foreach ($request as $key => $value) {
            $data[$i]['category'] = $category;
            $data[$i]['field']    = $key;
            $data[$i]['value'] = $value;
            $i++;
        }

        foreach ($data as $key => $value) {
            if ((new Preference())->storeOrUpdate($value)) {
                $response = $this->messageArray(__('The :x has been successfully saved.', ['x' => __('Product setting')]), 'success');
            }
        }
        return $response;
    }
}
