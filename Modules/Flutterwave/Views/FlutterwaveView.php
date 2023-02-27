<?php

/**
 * @package Flutterwave view
 * @author TechVillage <support@techvill.org>
 * @contributor kabir Ahmed <[kabir.techvill@gmail.com]>
 * @created 05-11-2022
 */

namespace Modules\Flutterwave\Views;

use Modules\Gateway\Contracts\PaymentViewInterface;
use Modules\Gateway\Services\GatewayHelper;
use Modules\Gateway\Traits\ApiResponse;
use Modules\Flutterwave\Entities\Flutterwave;

class FlutterwaveView implements PaymentViewInterface
{
    use ApiResponse;
    public static function paymentView($key)
    {
        $helper = GatewayHelper::getInstance();
        try {
            $flutterwave = Flutterwave::firstWhere('alias', 'flutterwave')->data;

            return view('flutterwave::pay', [
                'publicKey' => $flutterwave->publicKey,
                'instruction' => $flutterwave->instruction,
                'purchaseData' => $helper->getPurchaseData($key)
            ]);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => __('Purchase data not found.')]);
        }
    }

    public static function paymentResponse($key)
    {
        $helper = GatewayHelper::getInstance();

        $flutterwave = Flutterwave::firstWhere('alias', 'flutterwave')->data;
        return [
            'publicKey' => $flutterwave->publicKey,
            'instruction' => $flutterwave->instruction,
            'purchaseData' => $helper->getPurchaseData($key)
        ];
    }
}
