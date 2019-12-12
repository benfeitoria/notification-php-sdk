<?php


namespace Benfeitoria\Notification\Notifications;


class Email67 extends BaseNotification
{
    public $description = "E-mail 67 - Pagamento Antecipação e Saque Realizado com Sucesso.";

    public function getNotification(): string
    {
        return "email/67";
    }

    public function getRequiredFields(): array
    {
        return [
            "projects_id",
            "projects_title",
            "projects_pagarme_recipient_id",
            "projects_anticipation_withdraw_value",
            "projects_anticipation_date",
            "projects_withdrawl_date",
            "projects_bank_accounts_bank",
            "projects_bank_accounts_office",
            "projects_bank_accounts_account",
            "projects_bank_accounts_document_type",
            "projects_bank_accounts_document_number",
            "projects_bank_accounts_legal_name"
        ];
    }
}