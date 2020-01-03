<?php


namespace Benfeitoria\Notification\Notifications;


class Email72 extends BaseNotification
{
    public $description = "E-mail 72 - FALHA no Saque.";

    public function getNotification(): string
    {
        return "email/72";
    }

    public function getRequiredFields(): array
    {
        return [
            "projects_id",
            "projects_title",
            "transfer_gateway_response",
            "projects_transfer_value",
            "projects_withdraw_date_limit"
        ];
    }
}