<?php


namespace Benfeitoria\Notification\Notifications;


class Email46 extends BaseNotification
{
    public $description = "E-mail 46 -  Assinatura atrasada";

    public function getNotification(): string
    {
        return "subscription/status-updated-overdue";
    }

    public function getRequiredFields(): array
    {
        return [
            "realizador_nome",
            "realizador_email",
            "projeto_nome",
            "projeto_url",
            "colaborador_nome",
            "colaborador_email",
            "assinatura_codigo",
            "assinatura_valor"
        ];
    }
}