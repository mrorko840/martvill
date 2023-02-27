<?php

namespace Modules\Coinbase\Response;

use Modules\Gateway\Contracts\CryptoResponseInterface;
use Modules\Gateway\Contracts\HasDataResponseInterface;
use Modules\Gateway\Response\Response;

class CoinbaseResponse extends Response implements
    HasDataResponseInterface,
    CryptoResponseInterface
{

    public $response;
    public $data;

    public function __construct($response, $data)
    {
        $this->response = $response;
        $this->data = $data;
    }


    public function getGateway(): string
    {
        return 'coinbase';
    }

    public function getResponse(): string
    {
        return json_encode([
            'amount' => $this->response->pricing->local->amount,
            'amount_captured' => 0,
            'currency' => $this->response->pricing->local->currency,
            'code' => $this->data->code
        ]);
    }

    public function setPaymentStatus($status)
    {
        $this->status = $status;
    }

    public function getRawResponse(): string
    {
        return json_encode($this->response);
    }

    public function getUrl()
    {
        return $this->response->hosted_url;
    }

    public function setParams($array)
    {
        $this->params = $array;
    }

    public function getParams()
    {
        return $this->params;
    }

    /**
     * Set a unique code returned by the gateway while creating payment request/transaction
     */
    public function setUniqueCode($code)
    {
        $this->unique = $code;
    }

    /**
     * get a unique code
     *
     * @return string
     */
    public function getUniqueCode()
    {
        return $this->unique;
    }
}
