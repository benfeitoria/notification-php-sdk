<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 14:49
 */

namespace Benfeitoria\Notification\Notifications;


class Email37 extends BaseNotification
{

    public $description = "E-mail 37 - Enviado quando a realizadora edita a campanha pela primeira vez";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "project/recurrent/updated-first-time";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "owner_name",
            "owner_email"
        ];
    }
}