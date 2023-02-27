<?php

namespace Modules\NGenius\Views;

use Modules\Gateway\Contracts\PaymentViewInterface;
use Modules\Gateway\Facades\GatewayHelper;
use Modules\NGenius\Entities\NGenius;

class NGeniusView implements PaymentViewInterface
{
    public static function paymentView($key)
    {
        $helper = GatewayHelper::getInstance();
        try {
            $ngeniusData = NGenius::firstWhere('alias', 'ngenius')->data;
            return view('ngenius::pay', [
                'instruction' => $ngeniusData->instruction,
                'purchaseData' => $helper->getPurchaseData($key)
            ]);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => __('Purchase data not found.')]);
        }
    }
}
