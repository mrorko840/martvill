<?php

namespace Modules\Instamojo\Response;

use Modules\Gateway\Contracts\HasDataResponseInterface;
use Modules\Gateway\Response\Response;

class InstamojoResponse extends Response implements HasDataResponseInterface
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
        if ($this->response->payment_request->status == 'Completed') {
            $this->setPaymentStatus('completed');
        } else {
            $this->setPaymentStatus('failed');
        }
    }


    public function getResponse(): string
    {
        return json_encode($this->getSimpleResponse());
    }


    private function getSimpleResponse()
    {
        return [
            'amount' => $this->data->total,
            'amount_captured' => $this->response->payment_request->payment->amount,
            'currency' => $this->response->payment_request->payment->currency,
            'code' => $this->data->code
        ];
    }


    public function getGateway(): string
    {
        return 'Instamojo';
    }


    protected function setPaymentStatus($status)
    {
        $this->status = $status;
    }
}
