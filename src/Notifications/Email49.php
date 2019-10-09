<?php


namespace Benfeitoria\Notification\Notifications;


class Email49 extends BaseNotification
{
    public $description = "E-mail 49 - Um apoiador com a assinatura suspensa/não pago volta a ficar ativo";

    public function getNotification(): string
    {
        return "email/49";
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