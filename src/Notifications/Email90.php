<?php

namespace Benfeitoria\Notification\Notifications;

class Email90 extends BaseNotification
{
    public $description = "E-mail 90 - Disparado 1 dia após a geração do codigo do pix SE o pagamento não foi identificado..";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/90";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "contributor_name",
            "contributor_email",
            "projects_title",
            "projects_short_url",
            "pix_qr_code",
            "pix_expiration_date",
            "pix_qr_code_url"
        ];
    }
}
