<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 15/08/19
 * Time: 14:53
 */

namespace Benfeitoria\Notification\Notifications;

/**
 * Class Email20
 * @package Benfeitoria\Notification\Notifications
 * @deprecated since 12/05/2020
 */
class Email20 extends BaseNotification
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
            "projects_short_url"
        ];
    }

}