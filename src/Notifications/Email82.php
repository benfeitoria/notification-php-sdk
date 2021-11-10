<?php

namespace Benfeitoria\Notification\Notifications;

class Email82 extends BaseNotification
{
    public $description = "E-mail 82 - Uma campanha está aguardando aprovação";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/82";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "owner_name",
            "projects_title",
            "projects_id"
        ];
    }
}