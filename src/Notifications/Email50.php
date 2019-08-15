<?php


namespace Benfeitoria\Notification\Notifications;


class Email50 extends BaseNotification
{
    public $description = "E-mail 50 -  Uma assinatura foi cancelada";

    public function getNotification(): string
    {
        return "email/50";
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