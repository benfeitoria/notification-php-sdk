<?php


namespace Benfeitoria\Notification\Notifications;


class Email70 extends BaseNotification
{
    public $description = "E-mail 70 - Antecipação realizada com Sucesso";

    public function getNotification(): string
    {
        return "email/70";
    }

    public function getRequiredFields(): array
    {
        return [
            "projects_id",
            "projects_title",
            "projects_pagarme_recipient_id",
            "projects_withdrawl_value"
        ];
    }
}