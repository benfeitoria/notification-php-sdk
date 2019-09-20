<?php

namespace Benfeitoria\Notification\Notifications;


class Email24 extends BaseNotification
{
    public $description = "E-mail 24 - Campanha chegou a 90% do tempo e está abaixo de 75% da arrecadação.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/24";
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