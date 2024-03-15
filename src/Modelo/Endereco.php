<?php

namespace Alura\Banco\Modelo;

/**
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */

final class Endereco 
{
    use AcessoPropriedades;
    private string $estado;
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $estado, string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->estado = $estado;    
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    

    public function getEstado(): string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }
    
    public function getCidade(): string
    {
        return $this->cidade;
    }

  
    public function setCidade(string $cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

   
    public function setBairro(string $bairro): self
    {
        $this->bairro = $bairro;

        return $this;
    }

  
    public function getRua(): string
    {
        return $this->rua;
    }

    
    public function setRua(string $rua): self
    {
        $this->rua = $rua;

        return $this;
    }

  
    public function getNumero(): string
    {
        return $this->numero;
    }

    
    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }
    
    public function __toString(): string
    {
        return "{$this->estado}, {$this->cidade}, {$this->bairro}, {$this->rua}, {$this->numero}";
    }

}