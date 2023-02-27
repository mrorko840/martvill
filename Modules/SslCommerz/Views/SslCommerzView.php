<?php

/**
 * @package SslCommerzView
 * @author techvillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 30-10-22
 */

namespace Modules\SslCommerz\Views;

use Modules\Gateway\Contracts\PaymentViewInterface;
use Modules\Gateway\Facades\GatewayHelper;
use Modules\SslCommerz\Entities\SslCommerz;

class SslCommerzView implements PaymentViewInterface
{
    /**
     * Payment View
     *
     * @param string $key
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public static function paymentView($key)
    {
        try {
            $sslcommerz = SslCommerz::firstWhere('alias', 'sslcommerz')->data;

            return view('sslcommerz::pay', [
                'data' => $sslcommerz,
                'ssl' => $sslcommerz->instruction,
                'purchaseData' => GatewayHelper::getPurchaseData($key)
            ]);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => __('Purchase data not found.')]);
        }
    }
}
