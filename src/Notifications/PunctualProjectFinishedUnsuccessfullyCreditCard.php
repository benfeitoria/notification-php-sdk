<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 15:11
 */

namespace Benfeitoria\Notification\Notifications;


class PunctualProjectFinishedUnsuccessfullyCreditCard extends BaseNotification
{

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "project/punctual/finished-unsuccessfully/credit-card";
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
            "contribuicao_valor",
            "realizador_email"
        ];
    }
}