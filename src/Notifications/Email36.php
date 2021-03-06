<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 14:59
 */

namespace Benfeitoria\Notification\Notifications;


class Email36 extends BaseNotification
{
    public $description = "E-mail 36 - Enviado como confirmação de cadastro de novo projeto na plataforma.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/36";
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