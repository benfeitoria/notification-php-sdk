<?php


namespace Benfeitoria\Notification\Notifications;


class SubscriptionOverdue extends BaseNotification
{
    public $description = "E-mail 46 -  Assinatura atrasada";

    public function getNotification(): string
    {
        return "subscription/status-updated-overdue";
    }
}