<?php


namespace Benfeitoria\Notification\Notifications;


class Email61 extends BaseNotification
{
    public $description = "E-mail 61 - TRAZ+1 (1): Disparado para os colaboradores de um projeto que ainda não 
                            atingiu a meta 01 antes de 07 dias do término da campanha";

    public function getNotification(): string
    {
        return "email/61";
    }

    public function getRequiredFields(): array
    {
        return [
            "projects_title",
            "projects_short_url",
            "users_name",
            "users_email",
            "projects_value_remaining"
        ];
    }
}