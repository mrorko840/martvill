<?php

namespace Modules\Coinpayment\Views;

use Modules\Coinpayment\Helper\CoinpaymentApi;
use Modules\Gateway\Contracts\PaymentViewInterface;
use Modules\Gateway\Facades\GatewayHelper;
use Modules\Coinpayment\Entities\Coinpayment;

class CoinpaymentView implements PaymentViewInterface
{

    public static function paymentView($key)
    {
        $helper = GatewayHelper::getInstance();
        $purchaseData = $helper->getPurchaseData($key);
        try {
            $coinpayment = Coinpayment::firstWhere('alias', 'coinpayment')->data;
            $api = new CoinpaymentApi($coinpayment->privateKey, $coinpayment->publicKey);
            $rates = $api->getRates();
            if ($rates["error"] == "ok") {
                $rates = $rates["result"];
                $coins = $coinpayment->currencies;
                foreach ($coins as $coin) {
                    $currencies[$coin] = $rates[$coin];
                }
                $currencies[$purchaseData->currency_code] = $rates[$purchaseData->currency_code];
            }
            return view('coinpayment::pay', [
                'instruction' => $coinpayment->instruction,
                'coinpayment' => $coinpayment,
                'purchaseData' => $purchaseData,
                'currencies' => $currencies
            ]);
        } catch (\Exception $e) {
            // return back()->withErrors(['error' => __('Purchase data not found.')]);
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
