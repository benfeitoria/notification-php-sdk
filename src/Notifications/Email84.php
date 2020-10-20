<?php

namespace Benfeitoria\Notification\Notifications;

class Email84 extends BaseNotification
{
    public $description = "E-mail 84 - Email genérico incluindo mensagem";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/84";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "subject",
            "message",
            "to_email"
        ];
    }
}