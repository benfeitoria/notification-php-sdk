<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 14:59
 */

namespace Benfeitoria\Notification\Notifications;


class Email8 extends BaseNotification
{
    public $description = "E-mail 8 - E-mail disparado quando a campanha atingir 10% do tempo, se ultrapassar 20% da meta.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/8";
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
            "projects_captation_days",
            "projects_total_collected",
            "projects_percentage_collected_of_first_goal"
        ];
    }
}