<?php

namespace Benfeitoria\Notification\Notifications;


class Email76 extends BaseNotification
{
    public $description = "E-mail 76 - Campanha FLEX foi finalizado.";
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
            "owner_name",
            "owner_email",
            "projects_title",
            "projects_short_url",
            "consultant_name"
        ];
    }

}