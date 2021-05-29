<?php

namespace Alura\Banco\Servicos;

use Alura\Banco\Modelo\Funcionarios\Diretor;
use Alura\Banco\Modelo\InterfaceDeAutenticacao;

class AutenticadorDeSenha
{
   public function Login(InterfaceDeAutenticacao $interfaceDeAutenticacao, $senha):void
   {
       if($interfaceDeAutenticacao->podeAutenticar($senha)){
           echo "Login efetuado com sucesso.";
       }else{
           echo "Senha inválida";
       }
   } 
}
