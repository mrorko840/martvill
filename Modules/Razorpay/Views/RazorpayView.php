<?php

/**
 * @package RazorpayView
 * @author TechVillage <support@techvill.org>
 * @contributor Muhammad AR Zihad <[zihad.techvill@gmail.com]>
 * @created 16-2-22
 */

namespace Modules\Razorpay\Views;

use Modules\Gateway\Contracts\PaymentViewInterface;
use Modules\Gateway\Facades\GatewayHelper;
use Modules\Razorpay\Entities\Razorpay;
use Modules\Razorpay\Facades\RazorFacade;
use Razorpay\Api\Errors\BadRequestError;

class RazorpayView implements PaymentViewInterface
{
    public static function paymentView($key)
    {

        try {

            $razorpay = Razorpay::firstWhere('alias', 'razorpay')->data;

            $data = RazorFacade::getOrder($key, $razorpay);

            return view('razorpay::pay', [
                'data' => json_encode($data),
                'instruction' => $razorpay->instruction,
                'purchaseData' => GatewayHelper::getPurchaseData($key)
            ]);

        } catch (BadRequestError $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => __('Purchase data not found.')]);
        }
    }
}
