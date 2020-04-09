<?php


namespace Benfeitoria\Notification\Notifications;


class Email74 extends BaseNotification
{
    public $description = "E-mail 74 - TRAZ+1 (1): Disparado para os colaboradores de um projeto flex 07 dias do término da campanha";

    public function getNotification(): string
    {
        return "email/74";
    }

    public function getRequiredFields(): array
    {
        return [
            "projects_title",
            "projects_short_url",
            "contributor_name",
            "contributor_email"
        ];
    }
}