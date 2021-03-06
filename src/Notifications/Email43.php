<?php

namespace Benfeitoria\Notification\Notifications;

class Email43 extends BaseNotification
{
    public $description = "E-mail 43 - Enviado após o 03 mês, mensalmente, se a arrecadação não cresceu mais que 10% comparado ao mês anterior";

    public function getNotification(): string
    {
        return "email/43";
    }

    public function getRequiredFields(): array
    {
        return [
            "owner_name",
            "owner_email",
            "projects_percentage_collected_of_first_goal",
            "projects_total_collected",
            "projects_count_subscribers"
        ];
    }
}