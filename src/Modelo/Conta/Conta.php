<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
    private static int $numeroDeContas = 0;



    public function __construct(Titular $titular)
    {
        echo "Criando uma nova conta: ". PHP_EOL;
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorSaque):Conta
    {
        $tarifaSaque = $valorSaque * $this->percentualTarifa();
        $valorSaque += $tarifaSaque;
        
        if ($valorSaque < 1) {
            echo ("O valor do saque tem que ser maior que 0");
    }
        if ( $valorSaque> $this->saldo) {    
            //echo ("Saldo insuficiente");
            throw new SaldoInsuficienteException($valorSaque, $this->saldo);
        }
        if ($valorSaque > 5000) {
            echo ("O valor diario de saque é de no máximo 5.000,00 ");
        }

        $this->saldo -= $valorSaque;

        return $this;
    }

    public function deposita(float $valorDeposito):Conta
    {
        if ($valorDeposito < 0) {
            //echo ("O valor do deposito tem que ser maior que 0");
            throw new \InvalidArgumentException();
        }
        if ($valorDeposito > 5000) {
            echo ("O valor diario de deposito é de no máximo 5.000,00 ");
        }

        $this->saldo += $valorDeposito;

        return $this;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function getNomeTitular(): string 
    {
        return $this->titular->getNome();
    }

    public function getCpfTitular(): string 
    {
        return $this->titular->getCpf();
    }

    public static function getNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;
    
}