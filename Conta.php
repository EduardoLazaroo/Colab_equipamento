<?php

class Conta {

    public $cliente;
    public $agencia;
    public $conta;
    public $digito;
    public $saldo;

    public function getSaldo() {
        return $this->saldo();
    }

}

$contaNuBank = new Conta();