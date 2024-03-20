<?php

require_once 'autoload.php';
use Alura\Banco\Modelo\Endereco;


$umEndereco = new Endereco(
    'Rio',
    'Petrópolis',
    'bairro qualquer',
    'Minha rua',
    '71b'
);
$outroEndereco = new Endereco(
    'Rio',
    'Rio',
    'Centro',
    'Uma rua aí',
    '50'
);

//$umEndereco->cidade = "Fortaleza";

echo $umEndereco;
echo $umEndereco->cidade;

