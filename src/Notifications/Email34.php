<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 15:11
 */

namespace Benfeitoria\Notification\Notifications;


class Email34 extends BaseNotification
{
    public $description = "E-mail 34 - Disparado para todos os colaboradores quando a campanha é bem sucedida.";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/34";
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
            "projects_count_contributors",
            "owner_email"
        ];
    }
}