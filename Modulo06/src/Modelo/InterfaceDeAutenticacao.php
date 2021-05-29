<?php

namespace Alura\Banco\Modelo;

interface InterfaceDeAutenticacao
{
    public function podeAutenticar(string $senha): bool;
}