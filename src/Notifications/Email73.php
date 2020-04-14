<?php

namespace Benfeitoria\Notification\Notifications;


class Email73 extends BaseNotification
{
    public $description = "E-mail 73 - Confirmação de cadastro de novo projeto flex.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/73";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "owner_name",
            "owner_email"
        ];
    }
}