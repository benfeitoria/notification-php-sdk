<?php

namespace Benfeitoria\Notification\Notifications;


class Email15 extends BaseNotification
{
    public $description = "E-mail 15 - Email enviado após 01 mês de arrecadação, apenas para projetos que atingiram a meta.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/15";
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