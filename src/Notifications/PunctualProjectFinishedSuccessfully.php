<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 15:11
 */

namespace Benfeitoria\Notification\Notifications;


class PunctualProjectFinishedSuccessfully extends BaseNotification
{
    public $description = "E-mail 34 - Disparado para todos os colaboradores quando a campanha é bem sucedida.";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "project/punctual/finished-successfully";
    }

    /**
     * @return array
     */
    public function getRequiredFields(): array
    {
        return [
            "colaborador_nome",
            "colaborador_email",
            "projeto_nome",
            "projeto_url",
            "projeto_benfeitores",
            "realizador_email"
        ];
    }
}