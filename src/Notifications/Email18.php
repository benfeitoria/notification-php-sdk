<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 15/08/19
 * Time: 14:53
 */

namespace Benfeitoria\Notification\Notifications;


class Email18
{
    public $description = "E-mail 18 - Enviado para o time de consultoria quando recebemos uma nova proposta cadastrada.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/18";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "owner_name",
            "owner_email",
            "projects_title",
            "projects_short_url"
        ];
    }

}