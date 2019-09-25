<?php

namespace Benfeitoria\Notification\Notifications;

class Email40 extends BaseNotification
{
    public $description = "E-mail 40 - 01 mês após o lançamento";

    public function getNotification(): string
    {
        return "email/40";
    }

    public function getRequiredFields(): array
    {
        return [
            "owner_name",
            "owner_email"
        ];
    }
}