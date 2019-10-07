<?php


namespace Benfeitoria\Notification\Notifications;


class Email63 extends BaseNotification
{
    public $description = "E-mail 63 - Campanha abandonada há 2 meses";

    public function getNotification(): string
    {
        return "email/63";
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