<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 14:59
 */

namespace Benfeitoria\Notification\Notifications;


class Email44 extends BaseNotification
{
    public $description = "E-mail 44 - Campanha cancelada";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/44";
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