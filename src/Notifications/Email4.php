<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 14:59
 */

namespace Benfeitoria\Notification\Notifications;


class Email4 extends BaseNotification
{
    public $description = "E-mail 4 -  Campanha na etapa de construção está há 10 semanas sem atualizar.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/4";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "owner_name",
            "owner_email",
            "projects_title"
        ];
    }
}