<?php

/**
 * @package AuthorizeNetView
 * @author TechVillage <support@techvill.org>
 * @contributor Md. Mostafijur Rahman <[mostafijur.techvill@gmail.com]>
 * @created 08-01-2023
 */

namespace Modules\AuthorizeNet\Views;

use Modules\AuthorizeNet\Entities\AuthorizeNet;
use Modules\Gateway\Contracts\PaymentViewInterface;
use Modules\Gateway\Services\GatewayHelper;
use Modules\Gateway\Traits\ApiResponse;

class AuthorizeNetView implements PaymentViewInterface
{
    use ApiResponse;
    public static function paymentView($key)
    {
        $helper = GatewayHelper::getInstance();
        try {
            $authorize_net = AuthorizeNet::firstWhere('alias', 'authorizenet')->data;

            return view('authorizenet::pay', [
                'merchantTransactionKey' => $authorize_net->merchantTransactionKey,
                'instruction' => $authorize_net->instruction,
                'purchaseData' => $helper->getPurchaseData($key)
            ]);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => __('Purchase data not found.')]);
        }
    }

    public static function paymentResponse($key)
    {
        $helper = GatewayHelper::getInstance();

        $authorize_net = AuthorizeNet::firstWhere('alias', 'authorizenet')->data;
        return [
            'merchantTransactionKey' => $authorize_net->merchantTransactionKey,
            'instruction' => $authorize_net->instruction,
            'purchaseData' => $helper->getPurchaseData($key)
        ];
    }
}
