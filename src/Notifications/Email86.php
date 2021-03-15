<?php

namespace Benfeitoria\Notification\Notifications;

class Email86 extends BaseNotification
{
    public $description = "E-mail 86 - E-mail para os realizadores de campanhas recorrentes com uma pesquisa no pós campanha";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/86";
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