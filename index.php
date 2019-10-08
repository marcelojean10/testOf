<?php
    require_once "vendor/autoload.php";
    echo "<pre>";

    $aC = (new CurrentAccount(750));
    $aS = (new SavingsAccount(1500));

    echo "Saldo antigo da conta poupança: " . ($aS->getSale()) . "<br>";
    echo "Saldo atual da conta corrente: " . ($aC->getSale()) . "<br><br><br>";

        $transfer = $aS->transference(
            $aS,
            $aC,
            400,
            $aS->discountForPlunder
        );

    echo "Saldo atual da conta corrente: " . ($aC->getSale()) . "<br>";
    echo "Saldo atual da conta poupança: " . ($aS->getSale()) . "<br>";

