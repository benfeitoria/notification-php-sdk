<?php


namespace Benfeitoria\Notification\Notifications;


class Email30_2 extends BaseNotification
{
    public $description = "E-mail 30-2 - E-mail a ser disparado se a pessoa não colaborou com a Benfeitoria.";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/30_2";
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
            "owner_email"
        ];
    }
}