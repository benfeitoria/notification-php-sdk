<?php

namespace Benfeitoria\Notification\Notifications;

class Email58 extends BaseNotification
{
    public $description = "E-mail 58 -  E-mail enviado quando os projetos do Recorrente chegam a 80% de qualquer meta";

    public function getNotification(): string
    {
        return "email/58";
    }

    public function getRequiredFields(): array
    {
        return [
            "projects_title",
            "projects_short_url",
            "users_name",
            "users_email"
        ];
    }
}