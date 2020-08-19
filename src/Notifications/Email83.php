<?php

namespace Benfeitoria\Notification\Notifications;

class Email83 extends BaseNotification
{
    public $description = "E-mail 83 - Solicitação de aprovação enviada";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/83";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "owner_email",
            "projects_title",
            "owner_name",
        ];
    }
}