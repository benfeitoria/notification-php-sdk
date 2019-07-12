<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 14:49
 */

namespace Benfeitoria\Notification\Notifications;


class PunctualProjectUpdatedFirstTime extends BaseNotification
{

    public $description = "E-mail 2 - Primeira edição de campanha.";
    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "project/punctual/updated-first-time";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "realizador_nome",
            "realizador_email",
            "meta1",
            "meta1sobre5",
            "meta1sobre100",
            "meta1sobre100vezes80"
        ];
    }
}