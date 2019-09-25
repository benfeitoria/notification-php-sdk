<?php

namespace Benfeitoria\Notification\Notifications;

class Email41 extends BaseNotification
{
    public $description = "E-mail 41 - 02 meses após o lançamento";

    public function getNotification(): string
    {
        return "email/41";
    }

    public function getRequiredFields(): array
    {
        return [
            "owner_name",
            "owner_email"
        ];
    }
}