<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{Endereco, CPF, AcessoPropriedades, NomeCurtoException};
use Alura\Banco\Modelo\Conta\{Conta, ContaPoupança, ContaCorrente, Titular, SaldoInsuficienteException};

try{
$conta = new ContaCorrente(
    new Titular(
        new CPF('145.945.873-50'),
        '      ', 
        new Endereco('Ceara', 'Fortaleza', 'Aldeota', 'abcd', '100')
    )
);  
} catch(NomeCurtoException | InvalidArgumentException  $exception) {
    echo "Algum dos dados preenchidos está errado". PHP_EOL;
    echo $exception->getMessage(). PHP_EOL;
}


try {
$conta->deposita(100);
} catch (InvalidArgumentException $exception2) {
    echo "Valor a depositar precisa ser positivo". PHP_EOL;
    echo $exception2->getMessage() . PHP_EOL;
}

echo $conta->getSaldo();