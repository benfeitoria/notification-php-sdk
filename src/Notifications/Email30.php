<?php


namespace Benfeitoria\Notification\Notifications;


class Email30 extends BaseNotification
{
    public $description = "E-mail 30 - E-mail a ser disparado se a pessoa colaborou com uma campanha pontual.";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/30";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "contributor_name",
            "contributor_email",
            "projects_title",
            "projects_short_url",
            "goals_current_reference",
            "projects_dt_end",
            "contributions_value",
            "contributions_value_benfeitoria",
            "contributions_shipping_cost",
            "owner_email"
        ];
    }
}