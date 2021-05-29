<?php
namespace Alura\Banco\Modelo;

use DomainException;

class nomeCurtoException extends DomainException
{
    public function __construct($mensagem)
    {
        parent::__construct($mensagem);
    }
}