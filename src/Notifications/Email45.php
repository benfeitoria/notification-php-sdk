<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 14:59
 */

namespace Benfeitoria\Notification\Notifications;


class Email45 extends BaseNotification
{
    public $description = "E-mail 45 - Quando a campanha recebe um novo assinante";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/45";
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
            "subscriber_name",
            "subscriber_email",
            "subscriptions_subscription_code",
            "subscriptions_value_contribution"
        ];
    }
}