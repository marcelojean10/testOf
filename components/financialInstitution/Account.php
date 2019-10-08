<?php

namespace Components\physicist;

/**
 * Abstração dos métodos e propriedades dos componentes da Pessoa física.
 *
 * Abstract Class Account
 * @package Components\financialInstitution
 */

abstract class Account
{

    /**
     * Método de transferência bancária.
     *
     * Doador envia pro receptor a quantidade.
     *
     * @param $donor    | Doador
     * @param $receptor | Receptor
     * @param $quantity | Quantidade
     * @return bool
     */
    public function transference($donor, $receptor, $quantity, $discountRate) {

        if (
            ! empty($donor->getSale()) &&
            $donor->getSale() >= $donor->limitPlunder &&
            $donor->getSale() >= $quantity
        )
        {
            $donor->setSale(
                ($donor->getSale() - $quantity) -  $discountRate
            );

            $receptor->setSale(
                ($receptor->getSale() + $quantity) - $discountRate
            );

        }else {
            return false;
        }

    }

}