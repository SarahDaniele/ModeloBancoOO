<?php

require_once 'autoload.php';
use Alura\Banco\Modelo\{CPF,Autenticavel, Endereco};
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Funcionario, Gerente, Diretor};
use Alura\Banco\Modelo\Funcionario\EditorVideo;
use Alura\Banco\Servicos\{ControleBonificacoes, Autenticador};

$autenticador = new Autenticador();

$umDiretor = new Diretor(
    'Paulo',
    new CPF('321.954.092-64'),
    5000
);

$umGerente = new Gerente(
    'Paulo',
    new CPF('321.954.092-64'),
    5000
);

$umTitular = new Titular(
    new CPF('145.984.873-50'), 
    'Veronica', 
    new Endereco('Ceara', 'Fortaleza', 'Aldeota', 'abc', '12')
);

$autenticador->tentaLogin($umDiretor,'1234');
$autenticador->tentaLogin($umGerente,'4321');
$autenticador->tentaLogin($umTitular,'abcd');
