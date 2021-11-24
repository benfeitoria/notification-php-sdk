<?php

namespace Benfeitoria\Notification\Notifications;

class Email91 extends BaseNotification
{
    public $description = "E-mail Email91 - Disparado quando usuários precisam trocar informações entre si a respeito de alguma campaha ou recompensa por exemplo.";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/91";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            'sender_name',
            'sender_email',
            'recipient_name',
            'recipient_email',
            'message_content',
        ];
    }
}
