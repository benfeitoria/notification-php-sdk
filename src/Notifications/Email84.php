<?php

namespace Benfeitoria\Notification\Notifications;

class Email84 extends BaseNotification
{
    public $description = "E-mail 84 - Email genérico com mensagem mais link para CTA";

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
            "message",
            "url",
            "to_email"
        ];
    }
}