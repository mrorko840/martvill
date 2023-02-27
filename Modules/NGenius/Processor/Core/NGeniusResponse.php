<?php

namespace Modules\NGenius\Processor\Core;

use Modules\Gateway\Contracts\HasDataResponseInterface;
use Modules\Gateway\Response\Response;


class NGeniusResponse extends Response implements HasDataResponseInterface
{
    protected $response;

    private $data;

    /**
     * Constructor of the response
     *
     * @param object $data (PaymentLog model object)
     * @param object $response (Payment gateway response)
     */
    public function __construct($data, $response)
    {
        $this->data = $data;
        $this->response = $response;
        $this->updateStatus();
        return $this;
    }

    public function getResponse(): string
    {
        # Divided by 100 to get back original amount (from amount in minor units).
        # If property is not set, as we can't verify, default is ZERO.
        $amountCaptured = isset($this->response->_embedded->payment[0]->amount->value) ? ($this->response->_embedded->payment[0]->amount->value / 100) : 0;

        $formattedResponse = [
            'amount' => $this->data->total,
            'amount_captured' => $amountCaptured,
            'currency' => isset($this->response->_embedded->payment[0]->amount->currencyCode) ? $this->response->_embedded->payment[0]->amount->currencyCode : 'NULL',
            'code' => $this->data->code
        ];

        return json_encode($formattedResponse);
    }

    public function getRawResponse(): string
    {
        return json_encode($this->response);
    }

    protected function setPaymentStatus($status)
    {
        $this->status = $status;
    }

    public function getGateway(): string
    {
        return 'N-Genius';
    }

    protected function updateStatus()
    {
        if (isset($this->response->_embedded->payment[0]->state) && $this->response->_embedded->payment[0]->state == 'PURCHASED') {
            $this->setPaymentStatus('completed');
        } else {
            $this->setPaymentStatus('failed');
        }
    }
}
