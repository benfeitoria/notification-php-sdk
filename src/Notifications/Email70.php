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
            "projects_title",
            "projects_transfered_value",
            "projects_short_url",
            "projects_bank_accounts_bank",
            "projects_bank_accounts_office",
            "projects_bank_accounts_account",
            "projects_bank_accounts_document_type",
            "projects_bank_accounts_document_number",
            "projects_bank_accounts_legal_name"   
        ];
    }
}