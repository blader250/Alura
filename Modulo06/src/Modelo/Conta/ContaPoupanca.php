<?php
namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta 
{
    protected function TarifaPorcento():float
    {
        return 0.03;
    }
}
