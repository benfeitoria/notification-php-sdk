<?php

namespace Benfeitoria\Notification\Notifications;


class Email12 extends BaseNotification
{
    public $description = "E-mail 13 - Campanha acabou a arrecadação e ainda não atingiu a meta mas tem boletos pendentes.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/13";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "owner_name",
            "owner_email",
            "projects_title"
        ];
    }
}