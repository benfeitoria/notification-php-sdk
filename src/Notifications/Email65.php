<?php


namespace Benfeitoria\Notification\Notifications;


class Email65 extends BaseNotification
{
    public $description = "E-mail 65 - Campanha em suspense foi mal sucedida...";

    public function getNotification(): string
    {
        return "email/65";
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