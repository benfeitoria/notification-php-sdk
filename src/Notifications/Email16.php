<?php

namespace Benfeitoria\Notification\Notifications;


class Email16 extends BaseNotification
{
    public $description = "E-mail 16 - Email enviado após 03 meses de arrecadação, apenas para projetos que atingiram a meta.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/16";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "owner_name",
            "owner_email"
        ];
    }
}