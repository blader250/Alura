<?php

namespace Alura\Banco\Modelo\Funcionarios;

use Alura\Banco\Modelo\Funcionarios\Funcionario;
use Alura\Banco\Modelo\InterfaceDeAutenticacao;

class Diretor extends Funcionario implements InterfaceDeAutenticacao
{
    public function calculaBonificacao():float
    {
        return $this->recuperaSalario()*2;
    }
    
    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}