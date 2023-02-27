<?php
/**
 * @package CheckPaymentsProcessor
 * @author tehcvillage <support@techvill.org>
 * @contributor Sakawat Hossain Rony <[sakawat.techvill@gmail.com]>
 * @created 09-01-2023
 */
namespace Modules\CheckPayments\Processor;

use Modules\CheckPayments\Response\CheckPaymentsResponse;
use Modules\Gateway\Contracts\PaymentProcessorInterface;
use Modules\Gateway\Services\GatewayHelper;
use Modules\CashOnDelivery\Response\CashOnDeliveryResponse;


class CheckPaymentsProcessor implements PaymentProcessorInterface
{
    private $token;
    private $secret;
    private $key;
    private $helper;

    public function __construct()
    {
        $this->helper = GatewayHelper::getInstance();
    }


    /**
     * Handles payment for stripe
     *
     * @param \Illuminate\Http\Request
     *
     * @return CashOnDeliveryResponse
     */
    public function pay($request)
    {

        $this->data = $this->helper->getPurchaseData($this->key);

        $charge = [
            'status' => 'succeeded',
            'amount' => $this->data->total,
            "currency" => $this->data->currency_code,
        ];

        return new CheckPaymentsResponse($this->data, $charge);
    }
}
