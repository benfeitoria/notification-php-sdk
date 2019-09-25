<?php

namespace Benfeitoria\Notification\Notifications;


class Email12 extends BaseNotification
{
    public $description = "E-mail 12 - Email enviado quando o projeto não atinge a meta.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/12";
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