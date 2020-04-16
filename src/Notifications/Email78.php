<?php

namespace Benfeitoria\Notification\Notifications;


class Email78 extends BaseNotification
{
    public $description = "E-mail 78 - E-mail disparado quando a campanha flex atingir 90% do tempo.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/78";
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
            "projects_total_collected"
        ];
    }
}