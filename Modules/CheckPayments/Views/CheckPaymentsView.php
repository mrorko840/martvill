<?php
/**
 * @package CheckPaymentsView
 * @author tehcvillage <support@techvill.org>
 * @contributor Sakawat Hossain Rony <[sakawat.techvill@gmail.com]>
 * @created 09-01-2023
 */
namespace Modules\CheckPayments\Views;

use Modules\CheckPayments\Entities\CheckPayments;
use Modules\DirectBankTransfer\Entities\DirectBankTransfer;
use Modules\Gateway\Contracts\PaymentViewInterface;
use Modules\Gateway\Services\GatewayHelper;
use Modules\Gateway\Traits\ApiResponse;

class CheckPaymentsView implements PaymentViewInterface
{
    use ApiResponse;
    public static function paymentView($key)
    {
        $helper = GatewayHelper::getInstance();
        try {
            $dbt = CheckPayments::firstWhere('alias', 'checkpayments')->data;

            return view('checkpayments::pay', [
                'instruction' => $dbt->instruction,
                'purchaseData' => $helper->getPurchaseData($key)
            ]);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => __('Purchase data not found.')]);
        }
    }

    public static function paymentResponse($key)
    {
        $helper = GatewayHelper::getInstance();

        $dbt = CheckPayments::firstWhere('alias', 'checkpayments')->data;
        return [
            'instruction' => $dbt->instruction,
            'purchaseData' => $helper->getPurchaseData($key)
        ];
    }
}
