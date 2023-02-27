<?php

/**
 * @package PayPalCheckoutSdk/Core
 */

namespace Modules\Paypal\Services\Core;

class ProductionEnvironment extends PayPalEnvironment
{
    public function __construct($clientId, $clientSecret)
    {
        parent::__construct($clientId, $clientSecret);
    }

    public function baseUrl()
    {
        return "https://api-m.paypal.com";
    }
}
