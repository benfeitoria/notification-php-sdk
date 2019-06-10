<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/06/19
 * Time: 13:53
 */

namespace Benfeitoria\Notification;


class NotificationOAuth
{
    /***
     * @var string $tokenPath
     * @description WHERE YOUR TOKEN WILL BE STORED
     */
    private $tokenPath;

    /***
     * @var string $authCode
     * @description Your application authorization_code
     */
    private $authCode;

    /***
     * @var string $clientId
     * @description Your application client_id
     */
    private $clientId;

    /***
     * @var string $clientSecret
     * @description Your application client_secret
     */

    private $clientSecret;

    /***
     * @var string $redirectUri
     * @description Your application redirect_uri
     */
    private $redirectUri;

    public function __construct($tokenPath,$authCode,$clientId,$clientSecret,$redirectUri)
    {
        $this->tokenPath = $tokenPath;
        $this->authCode = $authCode;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->redirectUri = $redirectUri;
    }

    /**
     * @return string
     */
    public function getTokenPath()
    {
        return $this->tokenPath;
    }

    /**
     * @return string
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @return string
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->redirectUri;
    }
}