<?php

namespace Alura\Banco\Servicos;

use Alura\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor};

class ControleBonificacoes
{   
    private $totalBonificacoes = 0;
    public function adicionarBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function getTotal(): float 
    {
        return $this->totalBonificacoes;
    }
}