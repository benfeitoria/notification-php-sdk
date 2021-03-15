<?php

namespace Benfeitoria\Notification\Notifications;

class Email87 extends BaseNotification
{
    public $description = "E-mail 87 - E-mail para os realizadores de campanhas pontuais bem sucedidas com uma pesquisa no pós campanha";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/87";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "owner_email",
            "owner_name",
            "projects_title"
        ];
    }
}