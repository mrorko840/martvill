<?php

namespace Modules\NGenius\Processor\Core;

use Modules\NGenius\Processor\Core\Environment;


class SandboxEnvironment extends Environment
{
    public $type = 'sandbox';

    public function __construct(string $apiKey)
    {
        parent::__construct($apiKey, $this->baseUrl(), $this->type);
    }

    public function baseUrl()
    {
        return "https://api-gateway.sandbox.ngenius-payments.com";
    }
}
