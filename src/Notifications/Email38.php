<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 14:59
 */

namespace Benfeitoria\Notification\Notifications;


class Email38 extends BaseNotification
{
    public $description = "E-mail 38 - Enviado toda vez que a Benfeitoria envia uma mensagem pela plataforma, objetivo de informar que o realizador precisa ir na plataforma checar";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/38";
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