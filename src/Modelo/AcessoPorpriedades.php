<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{
    public function __get(string $nomeAtributo)
    {
        $metodo = 'get' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }

    public function __set($nomeAtributo, $value)
    {
        $metodo = 'set' . ucfirst($nomeAtributo);
        return $this->$metodo($value);
    }
}