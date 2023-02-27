<?php
/**
 * @package DirectBankTransferProcessor
 * @author tehcvillage <support@techvill.org>
 * @contributor Sakawat Hossain Rony <[sakawat.techvill@gmail.com]>
 * @created 09-01-2023
 */
namespace Modules\DirectBankTransfer\Processor;

use Modules\DirectBankTransfer\Response\DirectBankTransferResponse;
use Modules\Gateway\Contracts\PaymentProcessorInterface;
use Modules\Gateway\Services\GatewayHelper;
use Modules\CashOnDelivery\Entities\CashOnDelivery as CashOnDeliveryModel;
use Modules\CashOnDelivery\Response\CashOnDeliveryResponse;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Exception\AuthenticationException;
use Stripe\Exception\OAuth\InvalidRequestException;


class DirectBankTransferProcessor implements PaymentProcessorInterface
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

        return new DirectBankTransferResponse($this->data, $charge);
    }
}
