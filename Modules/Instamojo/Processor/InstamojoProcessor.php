<?php

namespace Modules\Instamojo\Processor;

use Modules\Gateway\Contracts\PaymentProcessorInterface;
use Modules\Gateway\Contracts\RequiresCallbackInterface;
use Modules\Gateway\Facades\GatewayHelper;
use Modules\Instamojo\Entities\Instamojo;
use Modules\Instamojo\Response\InstamojoResponse;

class InstamojoProcessor implements PaymentProcessorInterface, RequiresCallbackInterface
{

    private $instamojo;
    private $data;
    private $url = 'https://test.instamojo.com/api/1.1/';
    private $payload;



    public function pay($request)
    {
        $this->setup();
        $this->setPayload($request);
        return redirect($this->paymentRequest());
    }

    private function setup()
    {
        $this->setInstamojo();
        $this->setPurchaseDate();
    }

    private function setPurchaseDate()
    {
        $this->data = GatewayHelper::getPurchaseData(GatewayHelper::getPaymentCode());
    }


    private function setInstamojo()
    {
        $this->instamojo = Instamojo::first()->data;
        $this->setEnvironment();
    }

    public function paymentRequest()
    {
        $response = $this->curlRequest('payment-requests');
        $response = json_decode($response);
        if (!$response->success) {
            paymentLog('Instamojo::' . json_encode($response->message));
            throw new \Exception(__('Couldn\'t initiate the payment.'));
        }
        return $response->payment_request->longurl;
    }

    private function setEnvironment()
    {
        if (!$this->instamojo->sandbox) {
            $this->setProduction();
        }
    }
    private function setProduction()
    {
        $this->setUrl('https://www.instamojo.com/api/1.1/');
    }


    private function setUrl($url)
    {
        $this->url = $url;
    }

    private function setPayload($request)
    {
        $this->payload = json_encode([
            "amount" => round($this->data->total, 2),
            "purpose" => "purchase",
            "currency" => $this->data->currency_code,
            "buyer_name" => $request->name,
            "email" => $request->email,
            "redirect_url" => route(config('gateway.payment_callback'), withOldQueryIntegrity(['gateway' => 'instamojo'])),
            "allow_repeated_payments" => false,
            "send_email" => true,
        ]);
    }

    private function getUrl($action)
    {
        return $this->url . $action . '/';
    }


    public function curlRequest($action)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->getUrl($action),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_SSL_VERIFYHOST => config('instamojo.ssl_verify_host'),
            CURLOPT_SSL_VERIFYPEER => config('instamojo.ssl_verify_peer'),
            CURLOPT_POSTFIELDS => $this->payload,
            CURLOPT_HTTPHEADER => [
                "X-Api-Key: " . $this->instamojo->apiKey,
                "X-Auth-Token: " . $this->instamojo->authToken,
                "content-type: application/json",
                "cache-control: no-cache"
            ],
        ));

        return curl_exec($curl);
    }

    public function getPayment($action)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->getUrl($action),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => [
                "X-Api-Key: " . $this->instamojo->apiKey,
                "X-Auth-Token: " . $this->instamojo->authToken,
                "content-type: application/json",
                "cache-control: no-cache"
            ],
        ));
        return curl_exec($curl);
    }

    private function paymentValidate($request)
    {
        if ($request->payment_status == 'Failed') {
            throw new \Exception(__('Payment failed.'));
        }
        $response = $this->getPayment('payment-requests/' . $request->payment_request_id . '/' . $request->payment_id);
        $response = json_decode($response);
        if (!$response->success) {
            paymentLog($response);
            throw new \Exception(__('Payment could not be verified.'));
        }
        if (!$response->payment_request->status == 'Completed') {
            paymentLog($response);
            throw new \Exception(__('Payment is not completed.'));
        }

        return $response;
    }

    public function validateTransaction($request)
    {
        $this->setInstamojo();
        $this->setPurchaseDate();
        $response = $this->paymentValidate($request);
        return new InstamojoResponse($this->data, $response);
    }
}
