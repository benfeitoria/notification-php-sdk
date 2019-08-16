<?php


namespace Benfeitoria\Notification\Notifications;


class Email57 extends BaseNotification
{
    public $description = "E-mail 57 -  Enviado quando o próprio assinante cancela a assinatura";

    public function getNotification(): string
    {
        return "email/57";
    }

    public function getRequiredFields(): array
    {
        return [
            "projects_title",
            "projects_short_url",
            "subscriber_name",
            "subscriber_email"
        ];
    }
}