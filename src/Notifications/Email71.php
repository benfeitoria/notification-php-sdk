<?php


namespace Benfeitoria\Notification\Notifications;


class Email71 extends BaseNotification
{
    public $description = "E-mail 71 - Saque Realizado com Sucesso.";

    public function getNotification(): string
    {
        return "email/71";
    }

    public function getRequiredFields(): array
    {
        return [
            "projects_id",
            "projects_title",
            "owner_name",
            "projects_withdrawl_value"
        ];
    }
}