<?php


namespace Benfeitoria\Notification\Notifications;


class Email56 extends BaseNotification
{
    public $description = "E-mail 56 -  Enviado após três tentativa do pagamento de uma assinatura aguardando pagamento/não paga";

    public function getNotification(): string
    {
        return "email/56";
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