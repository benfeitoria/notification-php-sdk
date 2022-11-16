<?php

namespace Benfeitoria\Notification\Notifications;


class Email28 extends BaseNotification
{
    public $description = "E-mail 28 - Campanha chegou ao fim e foi para o status 17 (sem sucesso)";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/28";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "owner_email",
            "projects_title",
            "consultant_name",
            "total_collected",
            "admin_project_url"
        ];
    }
}