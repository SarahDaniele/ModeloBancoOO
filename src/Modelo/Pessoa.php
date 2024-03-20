<?php


namespace Alura\Banco\Modelo;


abstract class Pessoa 
{
    use AcessoPropriedades;
    protected $nome;
    private $cpf;

    
    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    
    public function getNome(): string
    {
        return $this->nome;
    }

  
    public function getCpf(): string
    {
        return $this->cpf->getNumero();
    }

    final protected function validaNome(string $nomeTitular)
    {   
        if (strlen(trim($nomeTitular)) < 4) {
        //echo "Nome precisa ter pelo menos 4 caracteres". PHP_EOL;
        throw new NomeCurtoException("$nomeTitular");
        }
    }


}