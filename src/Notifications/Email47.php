<?php


namespace Benfeitoria\Notification\Notifications;


class Email47 extends BaseNotification
{
    public $description = "E-mail 47 -  Assinatura fica suspensa/Não pago";

    public function getNotification(): string
    {
        return "subscription/status-updated-suspended";
    }

    public function getRequiredFields(): array
    {
        return [
            "owner_name",
            "owner_email",
            "projects_title",
            "projects_short_url",
            "subscriber_name",
            "subscriber_email",
            "subscriptions_subscription_code",
            "subscriptions_value_contribution"
        ];
    }
}