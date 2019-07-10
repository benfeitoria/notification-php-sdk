<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 14:49
 */

namespace Benfeitoria\Notification\Notifications;


class RecurrentProjectUpdatedFirstTime extends BaseNotification
{

    public $description = "E-mail 37 - Enviado quando a realizadora edita a campanha pela primeira vez";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "project/recurrent/updated-first-time";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "realizador_nome",
            "realizador_email"
        ];
    }
}