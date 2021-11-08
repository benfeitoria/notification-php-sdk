<?php

namespace Benfeitoria\Notification\Notifications;

class Email80 extends BaseNotification
{
    public $description = "E-mail 80 - E-mail de redefinição de senha";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/80";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            // User data
            "user_email",
            // Password reset data
            "password_reset_url"
        ];
    }
}