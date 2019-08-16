<?php


namespace Benfeitoria\Notification\Notifications;


class Email59 extends BaseNotification
{
    public $description = "E-mail 59 -  Quando cancelamos uma campanha, e-mail disparado para todos os assinantes.";

    public function getNotification(): string
    {
        return "email/59";
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