<?php

namespace Benfeitoria\Notification\Notifications;

class Email79 extends BaseNotification
{
    public $description = "E-mail 79 - E-mail disparado para o realizador de projetos bem sucedidos 7 dias após o encerramento da campanha.";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/79";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            // Owner data
            "owner_name",
            "owner_email",
            // Project data
            "projects_title",
            "projects_total_backed",
            "projects_total_backers",
            "projects_date_end",
            "projects_date_withdraw",
            "projects_transfer_value",
            // Tax data
            "projects_tax_gateway",
            "projects_tax_payw",
            // Bank data
            "projects_bank_accounts_bank",
            "projects_bank_accounts_office",
            "projects_bank_accounts_account",
            "projects_bank_accounts_document_type",
            "projects_bank_accounts_document_number",
            "projects_bank_accounts_legal_name",
            // Attachments data
            "link_csv",
            "link_xlsx"
        ];
    }
}