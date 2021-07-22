<?php

namespace Benfeitoria\Notification\Notifications;

class Email89 extends BaseNotification
{
    public $description = "E-mail 89 - Disparado quando o colaborador gera uma chave pix.";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/89";
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
            "pix_expiration_date"
        ];
    }
}