<?php


namespace Benfeitoria\Notification\Notifications;


class Email55 extends BaseNotification
{
    public $description = "E-mail 55 - Enviado quando a assinatura mensal é paga. Ela pode acontecer de 03 formas: 1. primeira tentativa de pagamento, 2. quando ela estava aguardando pagamento/não pago e é aprovada em uma das 03 retentativas, 3. Quando ela estava suspensa e o assinante reativa. ";

    public function getNotification(): string
    {
        return "email/55";
    }

    public function getRequiredFields(): array
    {
        return [
            "projects_title",
            "projects_short_url",
            "subscriber_name",
            "subscriber_email",
            "projects_count_subscribers"
        ];
    }
}