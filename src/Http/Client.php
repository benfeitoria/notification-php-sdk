<?php

namespace Benfeitoria\Notification\Http;

use Psr\Http\Message\ResponseInterface;

class Client extends \GuzzleHttp\Client
{
    private $requestOptions = [
        'headers' => [
            'Accept' => 'application/json',
            'Authorization' => ''
        ]
    ];

    public function __construct(string $endpoint, string $accessToken)
    {
        $this->requestOptions['headers']['Authorization'] = "Bearer {$accessToken}";
        parent::__construct(['base_uri' => $endpoint]);
    }

    public function request(string $method, $uri = '', array $options = []): ResponseInterface
    {
        $options = array_merge($this->requestOptions, $options);

        return parent::request($method, $uri, $options);
    }
}