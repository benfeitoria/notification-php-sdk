<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 14:49
 */

namespace Benfeitoria\Notification\Notifications;


class Email2 extends BaseNotification
{

    public $description = "E-mail 2 - Primeira edição de campanha.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "email/2";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "owner_nome",
            "owner_email",
            "goals_min_reference",
            "goals_min_reference_over_5",
            "goals_min_reference_over_100",
            "goals_min_reference_over_100_times_80"
        ];
    }
}