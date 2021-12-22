<?php

namespace Benfeitoria\Notification\Notifications;

class Email92 extends BaseNotification
{
    public $description = "E-mail Email 92 - Disparado após usuários iniciarem um contato utilizando a ferramenta de mensagem";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/92";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            'sender_name',
            'sender_email',
            'message_content',
        ];
    }
}
