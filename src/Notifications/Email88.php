<?php

namespace Benfeitoria\Notification\Notifications;

class Email88 extends BaseNotification
{
    public $description = "E-mail 88 - Uma campanha finalizada solicitou o saque do valor arrecadado";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/88";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "projects_title",
            "projects_id",
            "owner_name",
            "owner_email",
            "bank_account",
            "bank_accounts_document_number",
            "consultant_name"
        ];
    }
}