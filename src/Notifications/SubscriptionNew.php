<?php


namespace Benfeitoria\Notification\Notifications;


class SubscriptionNew extends BaseNotification
{

    public $description = "E-mail 45 - Quando a campanha recebe um novo assinante";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "subscription/created";
    }
}