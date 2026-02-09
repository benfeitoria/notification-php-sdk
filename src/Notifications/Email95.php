<?php


namespace Benfeitoria\Notification\Notifications;


class Email95 extends BaseNotification
{
    public $description = "E-mail 95 - Enviado para o assinante quando ele cria uma assinatura via pix automático";

    public function getNotification(): string
    {
        return "email/95";
    }

    public function getRequiredFields(): array
    {
        return [
            "projects_title",
            "subscriber_name",
            "subscriber_email"
        ];
    }
}