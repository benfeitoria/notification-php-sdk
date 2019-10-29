<?php


namespace Benfeitoria\Notification\Notifications;


class Email66 extends BaseNotification
{
    public $description = "E-mail 66 - Queremos saber sua expectativa!";

    public function getNotification(): string
    {
        return "email/66";
    }

    public function getRequiredFields(): array
    {
        return [
            "owner_email",
            "owner_name"
        ];
    }
}