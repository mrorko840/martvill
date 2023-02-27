<?php

namespace Modules\NGenius\Processor\Core;

use Illuminate\Database\Eloquent\Model;
use Modules\NGenius\Processor\Core\Environment;


class OrdersCreateRequest
{
    private $environment;

    private $orderReferenceCode;

    private $paymentLog;

    private $outletReference;

    public function __construct(Environment $environment, string $order_reference_code, Model $payment_log, string $outlet_reference)
    {
        $this->environment = $environment;
        $this->orderReferenceCode = $order_reference_code;
        $this->paymentLog = $payment_log;
        $this->outletReference = $outlet_reference;
    }

    public function getApiResponse()
    {
        $url = $this->environment->base_url."/transactions/outlets/".$this->outletReference."/orders";
        $token = $this->environment->getAccessToken();

        $postData = new \StdClass();
        $postData->action = "PURCHASE";
        $postData->merchantOrderReference = $this->orderReferenceCode;

        $postData->amount = new \StdClass();
        $postData->amount->currencyCode = $this->paymentLog->currency_code;

        # Keeping amount up to two decimal points.
        # Multiplied with 100 as "Order Amount" is required in minor units.
        $postData->amount->value = (int)(round($this->paymentLog->total, 2) * 100);

        $postData->merchantAttributes = new \StdClass();
        $postData->merchantAttributes->redirectUrl = route(config('gateway.payment_callback'), withOldQueryIntegrity(['gateway' => 'ngenius']));
        $postData->merchantAttributes->cancelUrl = route(config('gateway.payment_cancel'), withOldQueryIntegrity(['gateway' => 'ngenius']));
        $jsonPostData = json_encode($postData);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);

        # It is important to keep no spaces here in header when concatenating
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer ".$token,
            "Content-Type: application/vnd.ni-payment.v2+json",
            "Accept: application/vnd.ni-payment.v2+json"
        ));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonPostData);

        # Disabling SSL verification in sandbox mode
        if ($this->environment->env_type === 'sandbox') {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }

        $response = json_decode(curl_exec($ch), true);
        $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        return [
            "response" => $response,
            "code" => $httpStatusCode
        ];
    }
}
