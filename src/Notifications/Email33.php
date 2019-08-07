<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 15:11
 */

namespace Benfeitoria\Notification\Notifications;


class Email33 extends BaseNotification
{
    public $description = "E-mail 33 - Disparado para colaborações de campanha sem sucesso (status 17) para quem colaborou via cartão.";

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