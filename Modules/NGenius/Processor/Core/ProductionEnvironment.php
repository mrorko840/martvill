<?php

namespace Modules\NGenius\Processor\Core;

use Modules\NGenius\Processor\Core\Environment;


class ProductionEnvironment extends Environment
{
    public $type = 'production';

    public function __construct(string $apiKey)
    {
        parent::__construct($apiKey, $this->baseUrl(), $this->type);
    }

    public function baseUrl()
    {
        return "https://api-gateway.ngenius-payments.com";
    }
}
