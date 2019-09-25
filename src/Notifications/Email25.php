<?php

namespace Benfeitoria\Notification\Notifications;


class Email25 extends BaseNotification
{
    public $description = "E-mail 25 - Campanha chegou em 50% do tempo de arrecadação.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/25";
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