<?php


namespace Benfeitoria\Notification\Notifications;


class Email69 extends BaseNotification
{
    public $description = "E-mail 69 - FALHA na Antecipação.";

    public function getNotification(): string
    {
        return "email/69";
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