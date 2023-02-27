<?php

namespace Modules\Coinbase\Views;


use Modules\Coinbase\Entities\Coinbase;
use Modules\Coinbase\Processor\CoinbaseHelper;
use Modules\Gateway\Contracts\PaymentViewInterface;
use Modules\Gateway\Facades\GatewayHelper;

class CoinbaseView implements PaymentViewInterface
{
    public static function paymentView($key)
    {
        $coinbase = Coinbase::first()->data;
        $purchaseData = GatewayHelper::getPurchaseData($key);

        return view('coinbase::pay', [
            'instruction' => $coinbase->instruction,
            'purchaseData' => $purchaseData
        ]);
    }
}
