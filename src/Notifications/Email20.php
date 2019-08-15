<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 15/08/19
 * Time: 14:53
 */

namespace Benfeitoria\Notification\Notifications;


class Email20
{
    public $description = "E-mail 20 - Campanha foi publicada.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/20";
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
            "projects_short_url",
            "consultant_name",
            "consultant_email",
        ];
    }

}