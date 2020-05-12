<?php


namespace Benfeitoria\Notification\Notifications;

/**
 * Class Email68
 * @package Benfeitoria\Notification\Notifications
 * @deprecated since 12/05/2020
 */
class Email68 extends BaseNotification
{
    public $description = "E-mail 68 - Antecipação realizada com Sucesso";

    public function getNotification(): string
    {
        return "email/68";
    }

    public function getRequiredFields(): array
    {
        return [
            "projects_id",
            "projects_title",
            "projects_pagarme_recipient_id",
            "projects_transfer_value",
            "projects_anticipation_withdraw_value",
            "projects_withdraw_date",
            "projects_bank_accounts_bank",
            "projects_bank_accounts_office",
            "projects_bank_accounts_account",
            "projects_bank_accounts_document_type",
            "projects_bank_accounts_document_number",
            "projects_bank_accounts_legal_name"
        ];
    }
}