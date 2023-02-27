<?php

namespace Modules\Flutterwave\Response;

use Modules\Gateway\Contracts\HasDataResponseInterface;
use Modules\Gateway\Response\Response;

class FlutterwaveResponse extends Response implements HasDataResponseInterface
{
    protected $response;
    private $data;

    public function __construct($data, $response)
    {
        $this->data = $data;
        $this->response = $response;
        $this->updateStatus();
        return $this;
    }


    public function getRawResponse(): string
    {
        return json_encode($this->response);
    }


    protected function updateStatus()
    {
        $this->response->status == 'successful' ? $this->setPaymentStatus('completed') : $this->setPaymentStatus('failed');
    }


    public function getResponse(): string
    {
        return json_encode($this->getSimpleResponse());
    }


    private function getSimpleResponse()
    {
        return [
            'amount' => $this->data->total,
            'amount_captured' => $this->response->amount,
            'app_fee' => $this->response->app_fee,
            'charged_amount' => $this->response->charged_amount,
            'currency' => $this->response->currency,
            'code' => $this->data->code
        ];
    }


    public function getGateway(): string
    {
        return 'Flutterwave';
    }


    protected function setPaymentStatus($status)
    {
        $this->status = $status;
    }
}
