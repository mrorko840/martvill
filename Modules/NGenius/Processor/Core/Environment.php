<?php

namespace Modules\NGenius\Processor\Core;

use Modules\NGenius\Processor\Core\AccessTokenRequest;
use Modules\NGenius\Processor\Core\EnvironmentInterface;


abstract class Environment implements EnvironmentInterface
{
    protected $api_key;

    public $base_url;

    public $env_type;

    protected $access_token;

    protected $expires_in;

    protected $refresh_expires_in;

    protected $token_type;

    public function __construct(string $apiKey, string $baseUrl, string $type)
    {
        $this->api_key = $apiKey;
        $this->base_url = $baseUrl;
        $this->env_type = $type;
        $this->fetchResponse();
    }

    protected function fetchResponse()
    {
        $response = (new AccessTokenRequest($this->api_key, $this->base_url, $this->env_type))->getApiResponse();

        $this->access_token = $response['access_token'];
        $this->expires_in = $response['expires_in'];
        $this->refresh_expires_in = $response['refresh_expires_in'];
        $this->token_type = $response['token_type'];
    }

    public function getAccessToken()
    {
         return $this->access_token;
    }
}
