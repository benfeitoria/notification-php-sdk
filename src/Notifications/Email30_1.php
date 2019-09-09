<?php


namespace Benfeitoria\Notification\Notifications;


class Email30_1 extends BaseNotification
{
    public $description = "E-mail 30-1 - E-mail a ser disparado se a pessoa colaborou com a Benfeitoria.";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/30_1";
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
            "projects_goals_current_reference",
            "projects_dt_end",
            "contributions_value",
            "contributions_value_benfeitoria",
            "owner_email"
        ];
    }
}