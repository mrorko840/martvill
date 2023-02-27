<?php
/**
 * @package DirectBankTransferView
 * @author tehcvillage <support@techvill.org>
 * @contributor Sakawat Hossain Rony <[sakawat.techvill@gmail.com]>
 * @created 09-01-2023
 */
namespace Modules\DirectBankTransfer\Views;

use Modules\DirectBankTransfer\Entities\DirectBankTransfer;
use Modules\Gateway\Contracts\PaymentViewInterface;
use Modules\Gateway\Services\GatewayHelper;
use Modules\Gateway\Traits\ApiResponse;

class DirectBankTransferView implements PaymentViewInterface
{
    use ApiResponse;
    public static function paymentView($key)
    {
        $helper = GatewayHelper::getInstance();
        try {
            $dbt = DirectBankTransfer::firstWhere('alias', 'directbanktransfer')->data;

            return view('directbanktransfer::pay', [
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

        $dbt = DirectBankTransfer::firstWhere('alias', 'directbanktransfer')->data;
        return [
            'instruction' => $dbt->instruction,
            'purchaseData' => $helper->getPurchaseData($key)
        ];
    }
}
