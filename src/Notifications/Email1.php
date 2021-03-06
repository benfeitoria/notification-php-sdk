<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 14:59
 */

namespace Benfeitoria\Notification\Notifications;


class Email1 extends BaseNotification
{
    public $description = "E-mail 1 - Confirmação de cadastro de novo projeto.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/1";
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