<?php

/**
 * @package AuthorizeNetProcessor
 * @author techvillage <support@techvill.org>
 * @contributor Md. Mostafijur Rahman <[mostafijur.techvill@gmail.com]>
 * @created 09-01-23
 */

namespace Modules\AuthorizeNet\Processor;

use Modules\AuthorizeNet\Entities\AuthorizeNet;
use Modules\AuthorizeNet\Response\AuthorizeNetResponse;
use Modules\Gateway\Contracts\PaymentProcessorInterface;
use Modules\Gateway\Services\GatewayHelper;
use net\authorize\api\constants\ANetEnvironment;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;


class AuthorizeNetProcessor implements PaymentProcessorInterface
{
    private $authorize_net;
    private $cardNumber;
    private $merchantAuthentication;
    private $creditCard;
    private $paymentOne;
    private $transactionRequestType;
    private $formData;
    private $helper;
    private $data;
    private $code;

    public function __construct()
    {
        $this->authorize_net = AuthorizeNet::first()->data;
        $this->helper = GatewayHelper::getInstance();
        $this->merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
        $this->creditCard = new AnetAPI\CreditCardType();
        $this->paymentOne = new AnetAPI\PaymentType();
        $this->transactionRequestType = new AnetAPI\TransactionRequestType();
    }

    /**
     * Set merchant authentication info.
     *
     * @return void
     */

    private function setMerchantAuthentication()
    {
        $this->merchantAuthentication->setName($this->authorize_net->merchantLoginId);
        $this->merchantAuthentication->setTransactionKey($this->authorize_net->merchantTransactionKey);
    }



    /**
     * Handles payment for AuthorizeNet
     *
     * @param \Illuminate\Http\Request
     *
     * @return AuthorizeNetResponse
     */
    public function pay($request)
    {
        $this->formData = $request;
        $this->code = $this->helper->getPaymentCode();
        $this->data = $this->helper->getPurchaseData($this->code);
        $response = $this->authorizeNetSetup($request);

        return new AuthorizeNetResponse($this->data, $response);
    }


    /**
     * Authorize net data setup
     *
     * return mixed
     */

    private function authorizeNetSetup()
    {
        $this->setMerchantAuthentication();

        // Set the transaction's refId
        $refId = 'MV' . time();
        $this->cardNumber = preg_replace('/\s+/', '', strval($this->formData->cardNumber));

        // Create the payment data for a credit card
        $this->setCardData();

        $this->setPaymentType();

       $this->setTransactionRequestType();

        // Assemble the complete transaction request
        $requests = new AnetAPI\CreateTransactionRequest();
        $requests->setMerchantAuthentication($this->merchantAuthentication);
        $requests->setRefId($refId);
        $requests->setTransactionRequest($this->transactionRequestType);

        // Create the controller and get the response
        $controller = new AnetController\CreateTransactionController($requests);
        $response = $controller->executeWithApiResponse($this->authorize_net->sandbox == 1 ? ANetEnvironment::SANDBOX : ANetEnvironment::PRODUCTION);

        if ($response->getMessages()->getResultCode() == 'Error') {;
            throw new \Exception(__('Payment Request failed due to some issues. Please try again later.'));
        }
        return $response;
    }

    /**
     * Set card data info.
     *
     * @return void
     */

    private function setCardData()
    {
        $this->creditCard->setCardNumber($this->cardNumber);
        $this->creditCard->setExpirationDate($this->formData->expiration_year.'-'.$this->formData->expiration_month);
        $this->creditCard->setCardCode($this->formData->cvv);

    }

    /**
     * Set payment type.
     *
     * @return void
     */

    private function setPaymentType()
    {
        $this->paymentOne->setCreditCard($this->creditCard);
    }

    /**
     * Set transaction request type.
     *
     * @return void
     */

    private function setTransactionRequestType()
    {
        $this->transactionRequestType->setTransactionType("authCaptureTransaction");
        $this->transactionRequestType->setAmount(strval(round($this->data->total, 2)));
        $this->transactionRequestType->setPayment($this->paymentOne);
    }

}
