<?php


namespace Benfeitoria\Notification\Notifications;

/**
 * Class Email70
 * @package Benfeitoria\Notification\Notifications
 * @deprecated since 12/05/2020
 */
class Email70 extends BaseNotification
{
    public $description = "E-mail 70 - Saque Realizado com Sucesso.";

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