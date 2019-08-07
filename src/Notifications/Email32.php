<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 15:11
 */

namespace Benfeitoria\Notification\Notifications;


class Email32 extends BaseNotification
{
    public $description = "E-mail 32 - Disparado para colaborações de campanha sem sucesso (status 17) para quem colaborou via boleto.";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "project/punctual/finished-backed/bank-slip";
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
            "estorno_url",
            "realizador_email"
        ];
    }
}