<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{Endereco, CPF};
use Alura\Banco\Modelo\Conta\{Titular, ContaPoupanca, ContaCorrente, SaldoInsuficienteException};
use Alura\Banco\Modelo\nomeCurtoException;

try {
    $conta = new ContaCorrente(new Titular(new CPF('106.164.207-9'), 'PAPALA',new Endereco('Acre','bateu','massavelina','71')));
} catch (InvalidArgumentException $e) {
    echo $e->getMessage().PHP_EOL;
    exit();
} catch (nomeCurtoException $e) {
    echo $e->getMessage();
    exit();
}

$conta->deposita(2000);

echo $conta->recuperaSaldo().PHP_EOL;
try {
$conta->saca(3000);
} catch (SaldoInsuficienteException $e) {
    echo $e->getMessage().PHP_EOL;
}
echo $conta->recuperaSaldo().PHP_EOL;