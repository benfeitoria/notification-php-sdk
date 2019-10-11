<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/06/19
 * Time: 13:49
 */

namespace Benfeitoria\Notification;


use Benfeitoria\Notification\Exceptions\NotAuthorizedException;
use Benfeitoria\Notification\Contracts\Notification;
use Benfeitoria\Notification\Exceptions\NotificationMissingRequiredFieldsException;
use Benfeitoria\Notification\Http\Client;
use GuzzleHttp\Exception\ClientException;

abstract class NotificationSDK
{
    private $oauth;

    private $http;

    private $environment;


    /**
     * NotificationSDK constructor.
     * @param $environment
     * @param $endpoint
     * @param $tokenPath
     * @param $authCode
     * @param $clientId
     * @param $clientSecret
     * @param $redirectUri
     */
    public function __construct($environment,$endpoint,$tokenPath, $authCode, $clientId, $clientSecret, $redirectUri)
    {
        $this->oauth = new NotificationOAuth($tokenPath,$authCode,$clientId,$clientSecret,$redirectUri);
        $this->http = new Client($endpoint);
        $this->environment = $environment;
    }

    /**
     * @return NotificationOAuth
     */
    public function getOauth()
    {
        return $this->oauth;
    }

    /**
     * @param Notification $notification
     * @return mixed
     * @throws NotAuthorizedException
     */

    public function validate(Notification $notification){
        $requiredFields = $notification->getRequiredFields();
        $data = $notification->getData();
        foreach ($requiredFields as $requiredField)
            if(!isset($data[$requiredField])) return false;

        return true;
    }

    /**
     * @param Notification $notification
     * @return mixed
     * @throws NotAuthorizedException
     * @throws NotificationMissingRequiredFieldsException
     */
    public function send(Notification $notification){
        if(!$this->validate($notification)) throw new NotificationMissingRequiredFieldsException();
        else{
            $token = $this->getAccessToken();
            while (true) {
                try {
                    $response = $this->http->post("/api/notify", [
                        'form_params' => [
                            'environment' => $this->environment,
                            'notification' => $notification->getNotification(),
                            'notification_data' => $notification->getData()
                        ],
                        'headers' => [
                            'Accept' => 'application/json',
                            'Authorization' => "Bearer " . $token
                         ]
                    ]);

                    return json_decode($response->getBody(), true);
                } catch (ClientException $exception) {
                    if ($exception->getCode() == 401) {
                        $token = $this->refreshAccessToken();
                    } else {
                        throw new NotAuthorizedException($exception->getMessage(), $exception->getCode(), $exception);
                    }
                }
            }
        }
    }

    protected function getAccessToken(){
        $tokenPath = $this->oauth->getTokenPath();
        $authCode = $this->oauth->getAuthCode();

        if(file_exists($tokenPath) && is_file($tokenPath) && is_readable($tokenPath)){
            return $this->getJson($this->oauth->getTokenPath())['access_token'];
        }
        else{
            if($authCode){
                return $this->generateAccessTokenFromCode($authCode);
            }else{
                return $this->authenticate();
            }
        }
    }

    protected function generateAccessTokenFromCode($code){
        $response = $this->http->post('/oauth/token', [
            'form_params' => [
                'client_id' => $this->oauth->getClientId(),
                'client_secret' => $this->oauth->getClientSecret(),
                'redirect_uri' => $this->oauth->getRedirectUri(),
                'code' => $code,
                'grant_type' => 'authorization_code',
            ]
        ]);

        $response_data = json_decode($response->getBody(),true);
        file_put_contents($this->oauth->getTokenPath(),json_encode($response_data,JSON_PRETTY_PRINT));
        return $response_data['access_token'];
    }
    protected function refreshAccessToken(){
        $refreshToken = $this->getJson($this->oauth->getTokenPath())['refresh_token'];

        $response = $this->http->post('/oauth/token', [
            'form_params' => [
                'client_id' => $this->oauth->getClientId(),
                'client_secret' => $this->oauth->getClientSecret(),
                'redirect_uri' => $this->oauth->getRedirectUri(),
                'refresh_token' => $refreshToken,
                'grant_type' => 'refresh_token',
                'scope' => ''
            ]
        ]);

        $response_data = json_decode($response->getBody(),true);
        file_put_contents($this->oauth->getTokenPath(),json_encode($response_data,JSON_PRETTY_PRINT));
        return $response_data['access_token'];
    }

    public function authenticate(){
        $query = http_build_query([
            'client_id' => $this->oauth->getClientId(),
            'redirect_uri' => $this->oauth->getRedirectUri(),
            'response_type' => 'code',
            'scope' => ''
        ]);

        return $this->http->redirect('/oauth/authorize?'.$query);
    }

    public function redirectEchoAuthCode(){
        header("Content-type: application/json");
        echo json_encode(['code' => $_GET['code']]);
    }

    protected function getJson($path){
        return json_decode(file_get_contents($path),true);
    }


    /**
     * @return mixed
     * @throws NotAuthorizedException
     */
    public function user(){
        $token = $this->getAccessToken();
        while (true) {
            try {
                $response = $this->http->get("/api/user", [
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
                    throw new NotAuthorizedException($exception->getMessage(),$exception->getCode(),$exception);
                }
            }
        }
    }
}