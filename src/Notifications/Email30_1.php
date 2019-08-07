<?php


namespace Benfeitoria\Notification\Notifications;


class Email30_1 extends BaseNotification
{
    public $description = "E-mail 30-1 - E-mail a ser disparado se a pessoa colaborou com a Benfeitoria.";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "contribution/thanks/with-ce";
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
            "projeto_data_encerramento",
            "colaboracao_valor",
            "colaboracao_espontanea_valor",
            "realizador_email"
        ];
    }
}