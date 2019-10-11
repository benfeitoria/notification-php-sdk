<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 14:59
 */

namespace Benfeitoria\Notification\Notifications;


class Email9 extends BaseNotification
{
    public $description = "E-mail 9 - E-mail disparado quando a campanha atingir 10% do tempo, se estiver abaixo de 20% da meta.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/9";
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
            "projects_captation_days",
            "projects_percentage_collected_of_first_goal",
            "projects_total_collected"
        ];
    }
}