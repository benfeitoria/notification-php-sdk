<?php


namespace Benfeitoria\Notification\Notifications;


class Email30_3 extends BaseNotification
{
    public $description = "E-mail 30-3  - E-mail a ser disparado se a pessoa colaborou com uma campanha sem meta.";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/30_3";
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
            "contributions_value",
            "contributions_value_benfeitoria",
            "owner_email"
        ];
    }
}