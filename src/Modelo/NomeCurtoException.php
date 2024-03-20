<?php

namespace Alura\Banco\Modelo;

use Throwable;
class NomeCurtoException extends \DomainException
{
    public function __construct(string $nomeTitular)
    {
        $mensagem = "O nome $nomeTitular tem menos que 4 caracteres";
        parent::__construct($mensagem);
    }
}

