<?php

namespace Alura\Banco\Modelo\Funcionarios;

use Alura\Banco\Modelo\Funcionarios\Funcionario;

class EditorVideo extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return 600;   
    }
}