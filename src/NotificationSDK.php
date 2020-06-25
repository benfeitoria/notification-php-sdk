<?php

namespace Benfeitoria\Notification;

use Benfeitoria\Notification\Contracts\Notification;
use Benfeitoria\Notification\Exceptions\NotificationMissingRequiredFieldsException;
use Benfeitoria\Notification\Http\Client;

abstract class NotificationSDK
{
    private $http;

    private $environment;

    /**
     * NotificationSDK constructor.
     * @param string $environment
     * @param string $endpoint
     * @param string $accessToken
     */
    public function __construct(
        string $environment,
        string $endpoint,
        string $accessToken
    ) {
        $this->http = new Client($endpoint, $accessToken);
        $this->environment = $environment;
    }

    /**
     * @param Notification $notification
     * @return bool
     */
    public function validate(Notification $notification)
    {
        $requiredFields = $notification->getRequiredFields();
        $data = $notification->getData();
        foreach ($requiredFields as $requiredField) {
            if (!array_key_exists($requiredField, $data)) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param Notification $notification
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws NotificationMissingRequiredFieldsException
     */
    public function send(Notification $notification)
    {
        if (!$this->validate($notification)) {
            throw new NotificationMissingRequiredFieldsException();
        } else {
            return $this->http->post('/api/notify', [
                'form_params' => [
                    'environment' => $this->environment,
                    'notification' => $notification->getNotification(),
                    'notification_data' => $notification->getData()
                ]
            ]);
        }
    }

    /**
     * @param Notification $notification
     * @param $recipient
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function checkIfSent(Notification $notification, string $recipient)
    {
        return $this->http->post('/api/check-if-sent', [
            'form_params' => [
                'environment' => $this->environment,
                'notification' => $notification->getNotification(),
                'recipient' => $recipient
            ],
        ]);
    }
}