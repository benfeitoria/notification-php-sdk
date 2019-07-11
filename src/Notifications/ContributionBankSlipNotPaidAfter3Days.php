<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 10/07/19
 * Time: 15:11
 */

namespace Benfeitoria\Notification\Notifications;


class ContributionBankSlipNotPaidAfter3Days extends BaseNotification
{
    public $description = "E-mail 31 - Disparado 03 dias após a geração do boleto SE o pagamento não foi identificado.";

    /**
     * @return string
     */
    public function getNotification(): string
    {
        return "contribution/bank-slip/not-paid-after-3-days";
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
            "boleto_url"
        ];
    }
}