<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 15:11
 */

namespace Benfeitoria\Notification\Notifications;


class Email32 extends BaseNotification
{
    public $description = "E-mail 32 - Disparado para colaborações de campanha sem sucesso (status 17) para quem colaborou via boleto.";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "project/punctual/finished-backed/bank-slip";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "contributor_name",
            "contributor_email",
            "projects_title",
            "projects_short_url",
            "contributions_value",
            "refund_bank_slip_form_url",
            "owner_email"
        ];
    }
}