<?php

namespace Benfeitoria\Notification\Notifications;

class Email93 extends BaseNotification
{
    public $description = "E-mail Email 92 - Campanha chapix foi bem sucedida!";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/93";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            'owner_name',
            'projects_title',
            'projects_end_date',
            'projects_total_collected',
            'projects_count_contributors'
        ];
    }
}
