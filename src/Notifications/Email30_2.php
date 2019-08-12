<?php


namespace Benfeitoria\Notification\Notifications;


class Email30_2 extends BaseNotification
{
    public $description = "E-mail 30-2 - E-mail a ser disparado se a pessoa não colaborou com a Benfeitoria.";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "contribution/thanks/without-ce";
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
            "projeto_primeira_meta",
            "colaboracao_valor",
            "realizador_email"
        ];
    }
}