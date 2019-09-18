<?php

namespace Benfeitoria\Notification\Notifications;


class Email14 extends BaseNotification
{
    public $description = "E-mail 14 - Email enviado quando o projeto atinge a meta.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/14";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "owner_name",
            "owner_email",
            "projects_title",
            "projects_total_collected",
            "projects_percentage_collected_of_first_goal",
            "projects_benefactors",
            "projects_payw",
            "projects_total_collected_times_projects_payw",
            "projects_total_collected_times_tax_value",
            "projects_net_value"
        ];
    }
}