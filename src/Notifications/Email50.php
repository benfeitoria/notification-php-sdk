<?php


namespace Benfeitoria\Notification\Notifications;


class Email50 extends BaseNotification
{
    public $description = "E-mail 50 -  Uma assinatura foi cancelada";

    public function getNotification(): string
    {
        return "email/50";
    }

    public function getRequiredFields(): array
    {
        return [
            "owner_name",
            "owner_email",
            "projects_title",
            "projeto_url",
            "colaborador_nome",
            "colaborador_email",
            "assinatura_codigo",
            "assinatura_valor"
        ];
    }
}