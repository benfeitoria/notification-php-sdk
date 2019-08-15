<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 14:49
 */

namespace Benfeitoria\Notification\Notifications;


class Email7 extends BaseNotification
{

    public $description = "E-mail 7 - A campanha foi para o ar.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/7";
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