<?php

namespace Benfeitoria\Notification\Notifications;


class Email10 extends BaseNotification
{
    public $description = "E-mail 10 - E-mail disparado quando a campanha atingir 90% do tempo, se chegar a 75% da meta 01 .";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/10";
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
            "projects_captation_days",
            "projects_percentage_collected_of_first_goal"
        ];
    }
}