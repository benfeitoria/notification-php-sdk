<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 15:11
 */

namespace Benfeitoria\Notification\Notifications;


class Email29 extends BaseNotification
{
    public $description = "E-mail 29 - Disparado quando o colaborador gera um boleto para colaborar";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/29";
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