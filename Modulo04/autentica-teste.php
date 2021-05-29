<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionarios\Diretor;
use Alura\Banco\Modelo\Funcionarios\Gerente;
use Alura\Banco\Servicos\AutenticadorDeSenha;

$autenticador = new AutenticadorDeSenha();

$diretor1 = new Titular(new CPF('123.123.123-12'),'walfie',new Endereco('','','','',''));

$autenticador->Login($diretor1, "123321");