<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta 
{
    public function tranfere(float $valorTrasferencia, Conta $contaDestino): ContaCorrente
    {
        if ($valorTrasferencia < 1) {
            echo ("O valor transferido tem que ser maior que 0");
        }

        if ($this->saldo < $valorTrasferencia) {    
            echo ("Saldo insuficiente");
        }

        if ($valorTrasferencia > 5000) {
            echo ("O valor diario de tranferência é de no máximo 5.000,00 ");
        }

        $this->saca($valorTrasferencia);

        $contaDestino->deposita($valorTrasferencia);

        return $this;
    }

    protected function percentualTarifa(): float
    {
        return 0.05;
    }
}