<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 15/08/19
 * Time: 14:53
 */

namespace Benfeitoria\Notification\Notifications;

/**
 * Class Email19
 * @package Benfeitoria\Notification\Notifications
 * @deprecated since 12/05/2020
 */
class Email19 extends BaseNotification
{
    public $description = "E-mail 19: Enviado para o time de consultoria toda vez que o projeto entra no status 12.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/19";
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