<?php

namespace Benfeitoria\Notification\Notifications;


class Email75 extends BaseNotification
{
    public $description = "E-mail 75 - Campanha FLEX foi publicada.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/75";
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
            "projects_short_url"
        ];
    }

}