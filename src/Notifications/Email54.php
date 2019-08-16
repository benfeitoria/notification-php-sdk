<?php


namespace Benfeitoria\Notification\Notifications;


class Email54 extends BaseNotification
{
    public $description = "E-mail 54 - Enviado para o assinante quando ele confirma a assinatura/ Nova assinatura";

    public function getNotification(): string
    {
        return "email/54";
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