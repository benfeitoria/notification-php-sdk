<?php

namespace Benfeitoria\Notification\Notifications;


class Email23 extends BaseNotification
{
    public $description = "E-mail 23 - Campanha chegou a 90% do tempo e ultrapassou 75% da arrecadação.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/23";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "owner_email",
            "projects_title",
            "projects_percentage_collected_of_first_goal",
            "consultant_name",
            "consultant_email"
        ];
    }
}