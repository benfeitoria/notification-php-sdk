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
            "projects_title",
            "projects_short_url",
            "subscriber_name",
            "subscriber_email"
        ];
    }
}