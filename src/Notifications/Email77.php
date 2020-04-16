<?php

namespace Benfeitoria\Notification\Notifications;


class Email77 extends BaseNotification
{
    public $description = "E-mail 77 - E-mail disparado quando a campanha flex atingir 10% do tempo.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/77";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "owner_name",
            "owner_email",
            "projects_title"
        ];
    }
}