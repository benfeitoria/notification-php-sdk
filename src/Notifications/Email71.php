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
            "owner_email",
            "projects_transfer_value",
            "projects_bank_accounts_bank",
            "projects_bank_accounts_office",
            "projects_bank_accounts_account",
            "projects_bank_accounts_document_type",
            "projects_bank_accounts_document_number",
            "projects_bank_accounts_legal_name"
        ];
    }
}