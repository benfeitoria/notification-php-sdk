<?php


namespace Benfeitoria\Notification\Notifications;


class SubscriptionSuspended extends BaseNotification
{
    public $description = "E-mail 47 -  Assinatura fica suspensa/Não pago";

    public function getNotification(): string
    {
        return "subscription/status-updated-suspended";
    }
}