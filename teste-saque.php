<?php
require_once 'autoload.php';
use Alura\Banco\Modelo\{Endereco, CPF, AcessoPropriedades};
use Alura\Banco\Modelo\Conta\{Conta, ContaPoupança, ContaCorrente, Titular, SaldoInsuficienteException};


$conta = new ContaCorrente(
    new Titular(
        new CPF('145.984.873-50'), 
        'Veronica', 
        new Endereco('Ceara', 'Fortaleza', 'Aldeota', 'abc', '12')
    )
);  

$conta->deposita(500);

try {
    $conta->saca(600);
} catch(SaldoInsuficienteException $exception) {
    echo "Você nao tem saldo suficiente". PHP_EOL;
    echo $exception->getMessage(). PHP_EOL;
}
echo $conta->getSaldo();
