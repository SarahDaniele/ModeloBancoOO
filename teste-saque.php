<?php
use Alura\Banco\Modelo\{Endereco, CPF};
use Alura\Banco\Modelo\Conta\{Conta, ContaPoupança, ContaCorrente, Titular};

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('145.984.873-50'), 
        'Veronica', 
        new Endereco('Ceara', 'Fortaleza', 'Aldeota', 'abc', '12')
    )
);  

$conta->deposita(500);
$conta->saca(100);

echo $conta->getSaldo();
