<?php

namespace Benfeitoria\Notification\Http;

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

    public function request($method, $uri = '', $options = [])
    {
        $options = array_merge($this->requestOptions, $options);
        $response = parent::request($method, $uri, $options);

        return json_decode($response->getBody(), true);
    }

    public function post($uri, array $options = [])
    {
        return $this->request("POST", $uri, $options);
    }

    public function get($uri, array $options = [])
    {
        return $this->request("GET", $uri, $options);
    }
}