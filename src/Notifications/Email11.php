<?php

namespace Benfeitoria\Notification\Notifications;


class Email11 extends BaseNotification
{
    public $description = "E-mail 11 - E-mail disparado quando a campanha atingir 90% do tempo, se estiver abaixo de 75% da meta 01.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/11";
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
            "projects_total_collected",
            "projects_percentage_collected_of_first_goal"
        ];
    }
}