<?php

namespace Alura\Banco\Servicos;

use Alura\Banco\Modelo\Funcionarios\Funcionario;

class ControladorDeBonificacoes
{
    private $totalBonificacoes = 0;

    public function adicionaBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotalBonificacoes()
    {
        return $this->totalBonificacoes;
    }
}
