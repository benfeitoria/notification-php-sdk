<?php

namespace Benfeitoria\Notification\Notifications;

class Email53 extends BaseNotification
{
    public $description = "E-mail 53 - E-mail enviado para o time de consultoria todo mês, a cada mês que o projeto foi publicado na plataforma";

    public function getNotification(): string
    {
        return "email/53";
    }

    public function getRequiredFields(): array
    {
        return [
            "projects_title",
            "consultant_name",
            "projects_captation_months",
            "projects_percentage_collected_of_first_goal",
            "projects_count_subscribers",
            "projects_count_last_month_subscribers",
            "projects_total_collected",
            "consultant_email"
        ];
    }
}