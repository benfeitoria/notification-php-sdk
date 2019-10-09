<?php


namespace Benfeitoria\Notification\Notifications;


class Email48 extends BaseNotification
{
    public $description = "Email 48 - Assinatura atrasada ficou ativa";

    public function getNotification(): string
    {
        return "email/48";
    }

    public function getRequiredFields(): array
    {
        return [
            "owner_name",
            "owner_email",
            "projects_title",
            "subscriber_name",
            "subscriber_email",
            "subscriptions_subscription_code",
            "subscriptions_value_contribution"
        ];
    }
}