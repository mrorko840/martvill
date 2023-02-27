<?php

/**
 * @package PaystackResponse
 * @author TechVillage <support@techvill.org>
 * @contributor Muhammad AR Zihad <[zihad.techvill@gmail.com]>
 * @created 14-2-22
 */

namespace Modules\Paystack\Response;

use Modules\Gateway\Contracts\HasDataResponseInterface;
use Modules\Gateway\Response\Response;

class PaystackResponse extends Response implements HasDataResponseInterface
{
    protected $response;
    private $data;


    /**
     * Constructor of the response
     *
     * @param object $data (Order data object)
     * @param object $response (Payment response)
     */
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
        $this->setPaymentStatus('completed');
    }

    public function getResponse(): string
    {
        return json_encode($this->getSimpleResponse());
    }


    private function getSimpleResponse()
    {
        return [
            'amount' => $this->response->amount / 100,
            'amount_captured' => $this->response->amount / 100,
            'currency' => 'NGN',
            'code' => $this->data->code
        ];
    }


    public function getGateway(): string
    {
        return 'Paystack';
    }

    protected function setPaymentStatus($status)
    {
        $this->status = $status;
    }
}
