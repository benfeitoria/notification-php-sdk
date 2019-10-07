<?php


namespace Benfeitoria\Notification\Notifications;


class Email64 extends BaseNotification
{
    public $description = "E-mail 64 - Benfeitoria – Campanha em suspense foi bem sucedida!";

    public function getNotification(): string
    {
        return "email/64";
    }

    public function getRequiredFields(): array
    {
        return [
            "projects_title",
            "owner_email",
            "consultant_name"
        ];
    }
}