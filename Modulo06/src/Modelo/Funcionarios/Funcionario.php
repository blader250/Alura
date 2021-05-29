<?php

namespace Alura\Banco\Modelo\Funcionarios;

use Alura\Banco\Modelo\{CPF, Pessoa};

abstract class Funcionario extends Pessoa
{
    private $salario;
 
    public function __construct(string $nome, CPF $cpf, float $salario)//isso pode dar um erro em comparação com o titular
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }
    
    public function recuperaSalario()
    {
        return $this->salario;
    }

    public function recebeAumento($valorAumento)
    {
        if($valorAumento < 0){
            echo "O aumento deve ser positivo.".PHP_EOL;
            return;
        };
        $this->salario += $valorAumento;
    }
    
    public function alteraNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }
    
    abstract public function calculaBonificacao():float;

}