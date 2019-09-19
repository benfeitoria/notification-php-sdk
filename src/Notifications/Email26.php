<?php

namespace Benfeitoria\Notification\Notifications;


class Email26 extends BaseNotification
{
    public $description = "E-mail 26 - Campanha chegou ao fim e foi para o status 18 (aguardando boleto)";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/26";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "owner_email",
            "projects_title",
            "consultant_name"
        ];
    }
}