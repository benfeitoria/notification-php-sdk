<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 14:59
 */

namespace Benfeitoria\Notification\Notifications;


class Email5 extends BaseNotification
{
    public $description = "E-mail 5 - Após 60 dias sem atualização, a campanha vai para o status abandonado (status 7).";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/5";
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