<?php

namespace Benfeitoria\Notification\Notifications;

class Email60 extends BaseNotification
{
    public $description = "E-mail 60 - AINDA DÁ TEMPO: Disparado nos últimos 07 dias de campanha para quem não 
                            finalizou a contribuição";

    public function getNotification(): string
    {
        return "email/60";
    }

    public function getRequiredFields(): array
    {
        return [
            "projects_title",
            "projects_short_url",
            "contributor_name",
            "contributor_emails"
        ];
    }
}