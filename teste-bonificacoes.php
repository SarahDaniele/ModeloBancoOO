<?php

require_once 'autoload.php';
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Funcionario, Gerente, Diretor};
use Alura\Banco\Modelo\Funcionario\EditorVideo;
use Alura\Banco\Servicos\ControleBonificacoes;

$umaGerente = new Gerente(
    'Alice', 
    new CPF('453.865.228-56'),
    3000
);

$umDiretor = new Diretor(
    'Paulo',
    new CPF('321.954.092-64'),
    5000
);

$umaDesenvolvedora = new Desenvolvedor(
    'Ana Laura',
    new CPF('321.644.092-64'),
    1000
);

$umEditor = new EditorVideo(
    'Antonio',
    new CPF('123.953.012-54'),
    1500
);

$umaDesenvolvedora->sobeDeNivel();
$controlador = new ControleBonificacoes();
$controlador->adicionarBonificacaoDe($umDiretor);
$controlador->adicionarBonificacaoDe($umaGerente);
$controlador->adicionarBonificacaoDe($umaDesenvolvedora);
$controlador->adicionarBonificacaoDe($umEditor);
echo $controlador->getTotal();