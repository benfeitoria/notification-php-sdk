<?php


namespace Benfeitoria\Notification\Notifications;


class Email69 extends BaseNotification
{
    public $description = "E-mail 69 - Antecipação realizada com Sucesso";

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
            "projects_withdrawl_date_limit"        
        ];
    }
}