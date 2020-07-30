<?php

namespace Benfeitoria\Notification\Notifications;

class Email81 extends BaseNotification
{
    public $description = "E-mail 81 - Uma campanha publicada enviou uma mensagem! =D";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/81";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "owner_email",
            "projects_title",
            "projects_id",
            "consultant_name",
            "messages_content"
        ];
    }
}