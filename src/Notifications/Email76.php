<?php

namespace Benfeitoria\Notification\Notifications;


class Email76 extends BaseNotification
{
    public $description = "E-mail 76 - Campanha FLEX chegou ao fim e foi para o status 16 (bem sucedida)";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/76";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "owner_email",
            "projects_title",
            "consultant_name"
        ];
    }
}