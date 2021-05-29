<?php
require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionarios\{Desenvolvedor, Gerente, Diretor};
use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Servicos\ControladorDeBonificacoes;

$primeiroFun = new Diretor(
    'Batata',new CPF('123.123.123-76'), 4000
);

$segundoFun = new Gerente(
    'Joreu',new CPF('123.321.147-76'), 1800
);

$terceiroFun = new Desenvolvedor(
    'AAAAAAAAAAAAAA',new CPF('289.705.132-82'), 1000
);

echo $primeiroFun->nome;

exit();
$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($primeiroFun);
$controlador->adicionaBonificacao($segundoFun);
$controlador->adicionaBonificacao($terceiroFun);

echo $controlador->recuperaTotalBonificacoes();