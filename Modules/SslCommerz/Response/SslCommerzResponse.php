<?php

namespace Modules\SslCommerz\Response;

use Modules\Gateway\Contracts\HasDataResponseInterface;
use Modules\Gateway\Response\Response;

class SslCommerzResponse extends Response implements HasDataResponseInterface
{
    /**
     * SslCommerzResponse constructor
     *
     * @param object $data
     * @param array $response
     * @return void
     */
    public function __construct($data, $response)
    {
        $this->data = $data;
        $this->response = $response;
        $this->setPaymentStatus('completed');
    }

    /**
     * Set Payment Status
     *
     * @param string $status
     * @return void
     */
    protected function setPaymentStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Get Gateway
     *
     * @return string
     */
    public function getGateway(): string
    {
        return 'sslcommerz';
    }

    /**
     * Get Raw Response
     *
     * @return string
     */
    public function getRawResponse(): string
    {
        return json_encode($this->response);
    }

    /**
     * Get Response
     *
     * @return string
     */
    public function getResponse(): string
    {
        return json_encode($this->getSimpleResponse());
    }

    /**
     * Get Simple Response
     *
     * @return array
     */
    private function getSimpleResponse()
    {
        return [
            'amount' => $this->data->total,
            'amount_captured' => $this->data->total,
            'currency' => $this->data->currency_code,
            'code' => $this->data->code
        ];
    }
}
