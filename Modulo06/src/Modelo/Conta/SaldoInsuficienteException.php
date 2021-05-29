<?php

namespace Alura\Banco\Modelo\Conta;

use DomainException;

class SaldoInsuficienteException extends DomainException
{
    public function __construct(float $valorSaque, float $saldoAtual)
    {
        $mensagem = "O seu saldo é $saldoAtual, mas você tentou sacar $valorSaque";
        parent::__construct($mensagem);
    }
}