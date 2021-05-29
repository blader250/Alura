<?php

namespace Alura\Banco\Modelo\Funcionarios;

use Alura\Banco\Modelo\Funcionarios\Funcionario;
use Alura\Banco\Modelo\InterfaceDeAutenticacao;

class Gerente extends Funcionario implements InterfaceDeAutenticacao
{
    public function calculaBonificacao():float
    {
        return $this->recuperaSalario();
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'amoeba';
    }
}