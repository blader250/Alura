<?php

use Alura\Banco\Modelo\{Endereco, CPF};
use Alura\Banco\Modelo\Conta\{Titular, ContaPoupanca, ContaCorrente};
require_once 'autoload.php';


$conta = new ContaCorrente(new Titular(new CPF('106.164.207-96'), 'PAPALA',new Endereco('Acre','bateu','massavelina','71')));

$conta->deposita(2000);

echo $conta->recuperaSaldo().PHP_EOL;

$conta->saca(1000);

echo $conta->recuperaSaldo().PHP_EOL;