<?php

namespace Benfeitoria\Notification\Notifications;


class Email27 extends BaseNotification
{
    public $description = "E-mail 27 - Campanha chegou ao fim e foi para o status 16 (bem sucedida)";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/27";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "owner_email",
            "projects_title",
            "consultant_name",
            "consultant_email"
        ];
    }
}