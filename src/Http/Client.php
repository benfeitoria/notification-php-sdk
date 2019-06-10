<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/06/19
 * Time: 13:58
 */

namespace Benfeitoria\Notification\Http;


use Psr\Http\Message\UriInterface;

class Client extends \GuzzleHttp\Client
{
    const API_ENDPOINT = "https://notification.benfeitoria.com";

    public function request($method, $uri = '', array $options = [])
    {
        return parent::request($method, self::API_ENDPOINT."/".$uri, $options);
    }

    public function post($uri, array $options = [])
    {
        return $this->request("POST",$uri, $options);
    }

    public function get($uri, array $options = [])
    {
        return $this->request("GET",$uri, $options);
    }

    public function redirect($uri){
        return self::API_ENDPOINT."/".$uri;
    }
}