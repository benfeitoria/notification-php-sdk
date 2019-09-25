<?php

namespace Benfeitoria\Notification\Notifications;


class Email21 extends BaseNotification
{
    public $description = "E-mail 21 - Campanha chegou a 10% do tempo e está acima de 20% da arrecadação.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/21";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "owner_email",
            "projects_title",
            "projects_percentage_collected_of_first_goal"
        ];
    }
}