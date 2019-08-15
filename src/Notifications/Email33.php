<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 15:11
 */

namespace Benfeitoria\Notification\Notifications;


class Email33 extends BaseNotification
{
    public $description = "E-mail 33 - Disparado para colaborações de campanha sem sucesso (status 17) para quem colaborou via cartão.";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/33";
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
            "owner_email"
        ];
    }
}