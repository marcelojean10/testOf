<?php

use Components\physicist\Account;


class SavingsAccount extends Account
{
    /**
     *  Limite de Saque.
     *
     * @var int
     */
    public $limitPlunder = 600;

    /**
     * Desconto para o Saque.
     *
     * @var float
     */
    public $discountForPlunder = 2.50;

    /**
     * Saldo.
     *
     * @var
     */
    private $sale;




    public function __construct($sale)
    {
        $this->sale = $sale;
    }



    /**
     * Seta o saldo.
     *
     * @param $sale
     */
    public function setSale($sale) {
        $this->sale = $sale;
    }

    /**
     * Retorna o saldo.
     *
     * @return mixed
     */
    public function getSale() {
        return $this->sale;
    }
}