<?php


namespace Benfeitoria\Notification\Contracts;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

abstract class Notification
{
    const API_ENDPOINT = "https://notification.benfeitoria.com";
    /** @var Client $http */
    private $http;
    public function __construct()
    {
        $this->http = new Client();
    }

    public function send($notification,$data){
        $token = $this->getAccessToken();
        while (true) {
            try {
                $response = $this->http->request("POST", self::API_ENDPOINT . "/api/notify", [
                    'form_params' => [
                        'notification' => $notification,
                        'notification_data' => $data
                    ],
                    'headers' => [
                        'Accept' => 'application/json',
                        'Authorization' => "Bearer " . $token
                    ]
                ]);

                return json_decode($response->getBody(),true);
            } catch (ClientException $exception) {
                if($exception->getCode() == 401){
                    $token = $this->refreshAccessToken();
                }else{
                    throw new \Exception($exception->getMessage(),$exception->getCode(),$exception);
                }
            }
        }
    }

    protected function getAccessToken(){
        $tokenPath = config('benfeitoria-notification.token_path');
        $codePath = config('benfeitoria-notification.code_path');

        if(file_exists($tokenPath) && is_file($tokenPath) && is_readable($tokenPath)){
            return $this->getJson(config('benfeitoria-notification.token_path'))['access_token'];
        }
        else{
            if(file_exists($codePath) && is_file($codePath) && is_readable($codePath)){
                $code_infos = $this->getJson($codePath);
                return $this->generateAccessTokenFromCode($code_infos['code']);
            }else{
                return $this->authenticate();
            }
        }
    }

    protected function generateAccessTokenFromCode($code){
        $response = $this->http->post("POST",'http://notification.benfeitoria.local/oauth/token', [
            'form_params' => [
                'client_id' => config('benfeitoria-notification.client_id'),
                'client_secret' => config('benfeitoria-notification.client_secret'),
                'redirect_uri' => config('benfeitoria-notification.redirect_uri'),
                'code' => $code,
                'grant_type' => 'authorization_code',
            ]
        ]);

        $response_data = json_decode($response->getBody(),true);
        file_put_contents(config('benfeitoria-notification.token_path'),json_encode($response_data,JSON_PRETTY_PRINT));
        return $response_data['access_token'];
    }
    protected function refreshAccessToken(){
        $refreshToken = $this->getJson(config('benfeitoria-notification.token_path'))['refresh_token'];

        $response = $this->http->post(self::API_ENDPOINT.'/oauth/token', [
            'form_params' => [
                'client_id' => config('benfeitoria-notification.client_id'),
                'client_secret' => config('benfeitoria-notification.client_secret'),
                'redirect_uri' => config('benfeitoria-notification.redirect_uri'),
                'refresh_token' => $refreshToken,
                'grant_type' => 'refresh_token',
                'scope' => ''
            ]
        ]);

        $response_data = json_decode($response->getBody(),true);
        file_put_contents(config('benfeitoria-notification.token_path'),json_encode($response_data,JSON_PRETTY_PRINT));
        return $response_data['access_token'];
    }

    protected function authenticate(){
        $query = http_build_query([
            'client_id' => config('benfeitoria-notification.client_id'),
            'redirect_uri' => config('benfeitoria-notification.redirect_uri'),
            'response_type' => 'code',
            'scope' => ''
        ]);

        return redirect(self::API_ENDPOINT.'/oauth/authorize?'.$query);
    }

    public function getJson($path){
        return json_decode(file_get_contents($path));
    }
}