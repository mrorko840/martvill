<?php

namespace Modules\Instamojo\Views;

use Modules\Gateway\Contracts\PaymentViewInterface;
use Modules\Gateway\Services\GatewayHelper;
use Modules\Instamojo\Entities\Instamojo;

class InstamojoView implements PaymentViewInterface
{

    public static function paymentView($key)
    {
        $helper = GatewayHelper::getInstance();
        try {
            $instamojo = Instamojo::first()->data;
            return view('instamojo::pay', [
                'instruction' => $instamojo->instruction,
                'purchaseData' => $helper->getPurchaseData($key)
            ]);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => __('Purchase data not found.')]);
        }
    }
}
