<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 15:11
 */

namespace Benfeitoria\Notification\Notifications;


class Email31 extends BaseNotification
{
    public $description = "E-mail 31 - Disparado 03 dias após a geração do boleto SE o pagamento não foi identificado.";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "contribution/bank-slip/not-paid-after-3-days";
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
            "bank_slip_url"
        ];
    }
}