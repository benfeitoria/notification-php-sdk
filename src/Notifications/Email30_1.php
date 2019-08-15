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
        return "contribution/thanks/with-ce";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "contributor_nome",
            "contributor_email",
            "projects_title",
            "projects_short_url",
            "projects_dt_end",
            "contributions_value",
            "contributions_value_benfeitoria",
            "owner_email"
        ];
    }
}