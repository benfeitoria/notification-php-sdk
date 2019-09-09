<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 14:49
 */

namespace Benfeitoria\Notification\Notifications;


class Email3 extends BaseNotification
{

    public $description = "E-mail 3 - Envio de mensagem pela Benfeitoria";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/3";
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
            "projects_edit_url"
        ];
    }
}