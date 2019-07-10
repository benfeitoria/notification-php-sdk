<?php


namespace Benfeitoria\Notification\Notifications;


class SubscriptionSuspended extends BaseNotification
{
    public $description = "E-mail 47 -  Assinatura fica suspensa/Não pago";

    public function getNotification(): string
    {
        return "subscription/status-updated-suspended";
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