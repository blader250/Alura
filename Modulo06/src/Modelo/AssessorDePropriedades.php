<?php

namespace Alura\Banco\Modelo;

trait AssessorDePropriedades
{
    
    public function __get(string $nomeDoMetodo)
    {
        $metodo = 'recupera'.ucfirst($nomeDoMetodo);
        return $this->$metodo();
    }
}