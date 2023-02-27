<?php

namespace Modules\Coinbase\Processor;


class CoinbaseHelper
{
    private $apiKey;

    private $chargeUrl = 'https://api.commerce.coinbase.com/charges';

    public function __construct($key)
    {
        $this->apiKey = $key;
    }

    public function charge()
    {
        return $this->curl($this->chargeUrl, 'POST');
    }


    public function curl($url, $method = null)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => $this->data,
            CURLOPT_HTTPHEADER => $this->getCurlHeader(),
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        if ($err) {
            throw new \Exception($err);
        }

        return json_decode($response)->data;
    }


    public function getCurlHeader()
    {
        return [
            "Accept: application/json",
            "Content-Type: application/json",
            "X-CC-Version: 2018-03-22",
            'X-CC-Api-Key: ' . $this->apiKey,
        ];
    }


    public function setRequestData($data)
    {
        $this->data = json_encode($data);
        return $this;
    }
}
