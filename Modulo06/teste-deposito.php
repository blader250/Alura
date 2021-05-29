<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\nomeCurtoException;

try {
    $conta = new ContaCorrente(new Titular(new CPF('123.456.789-10'),"ad",new Endereco("","","","")));
} catch (InvalidArgumentException $exception) {
    echo $exception->getMessage().PHP_EOL;
    exit();
} catch (nomeCurtoException $exception) {
    echo $exception->getMessage();
    exit();
}
 
try {
    $conta->deposita(-119);
} catch (InvalidArgumentException $exception) {
    echo "o valor precisa ser positivo".PHP_EOL;
}