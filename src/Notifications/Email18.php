<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 15/08/19
 * Time: 14:53
 */

namespace Benfeitoria\Notification\Notifications;

/**
 * Class Email18
 * @package Benfeitoria\Notification\Notifications
 * @deprecated since 12/05/2020
 */
class Email18 extends BaseNotification
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
            "projects_title"
        ];
    }

}