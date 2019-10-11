<?php

namespace Benfeitoria\Notification\Notifications;


class Email22 extends BaseNotification
{
    public $description = "E-mail 22 - Campanha chegou a 10% do tempo e está abaixo de 20% da arrecadação.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/22";
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
            "consultant_name"
        ];
    }
}