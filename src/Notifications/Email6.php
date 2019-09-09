<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 14:49
 */

namespace Benfeitoria\Notification\Notifications;


class Email6 extends BaseNotification
{

    public $description = "E-mail 6 - A campanha está pronta para ser lançada, porém ela está agendada para um lançamento futuro. ";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/6";
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
            "projects_dt_begin"
        ];
    }
}