<?php

namespace Benfeitoria\Notification\Notifications;

class Email85 extends BaseNotification
{
    public $description = "E-mail 85 - Email para o realizador sobre campanha aprovada";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/85";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "owner_name",
            "projects_title"
        ];
    }
}