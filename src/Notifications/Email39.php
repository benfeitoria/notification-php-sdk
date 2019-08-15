<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 14:59
 */

namespace Benfeitoria\Notification\Notifications;


class Email39 extends BaseNotification
{
    public $description = "E-mail 39 - A campanha foi para o ar (status 6)";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/39";
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