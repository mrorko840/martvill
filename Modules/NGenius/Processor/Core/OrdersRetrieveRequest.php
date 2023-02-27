<?php

namespace Modules\NGenius\Processor\Core;

use Modules\NGenius\Processor\Core\Environment;


class OrdersRetrieveRequest
{
    private $environment;

    private $outletReference;

    private $NGeniusOrderReference;

    public function __construct(Environment $environment, string $outlet_reference, string $ngenius_order_reference)
    {
        $this->environment = $environment;
        $this->outletReference = $outlet_reference;
        $this->NGeniusOrderReference = $ngenius_order_reference;
    }

    public function getApiResponse()
    {
        $url = $this->environment->base_url."/transactions/outlets/".$this->outletReference."/orders/".$this->NGeniusOrderReference;
        $token = $this->environment->getAccessToken();

        # Perform a GET request
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        # It is important to keep no spaces here in header when concatenating
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer ".$token
        ));

        # Disabling SSL verification in sandbox mode
        if ($this->environment->env_type === 'sandbox') {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }

        $response = json_decode(curl_exec($ch));
        $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        return [
            "response" => $response,
            "code" => $httpStatusCode
        ];
    }
}
