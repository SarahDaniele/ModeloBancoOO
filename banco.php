<?php

require_once 'autoload.php';
use Alura\Banco\Modelo\{Endereco, CPF};
use Alura\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupança, Titular};



$endereco = new Endereco('Ceara','Fortaleza','Varjota','Delmiro','602');
$Sarah = new Titular(new CPF('123.456.789-10'), 'Sarah', $endereco);
$primeiraConta = new ContaPoupança($Sarah);
echo '<pre>';
var_dump($primeiraConta);

$tico = new Titular(new CPF('223.456.789-10'), 'Tico', $endereco);
$segundaConta = new ContaCorrente($tico);
var_dump($segundaConta);

$dani = new Titular(new CPF('223.542.567-09'), 'Dani', $endereco);
$terceraConta = new ContaCorrente($dani);
var_dump($terceraConta);

echo '--------------------------------------------------------------------------' . PHP_EOL;
echo'Depositos: '. PHP_EOL;
$primeiraConta->deposita(500);
var_dump($primeiraConta);

$segundaConta->deposita(600);
var_dump($segundaConta);

$terceraConta->deposita(300);
var_dump($terceraConta);

echo '--------------------------------------------------------------------------' . PHP_EOL;
echo 'Saques: '. PHP_EOL;
$primeiraConta->saca(100);
var_dump($primeiraConta);

$segundaConta->saca(100);
var_dump($segundaConta);

$terceraConta->saca(100);
var_dump($terceraConta);

echo '--------------------------------------------------------------------------' . PHP_EOL;
echo 'Traferência: '. PHP_EOL;
$segundaConta->tranfere(100, $primeiraConta);
var_dump($primeiraConta);
var_dump($segundaConta);

$terceraConta->tranfere(100, $segundaConta);
var_dump($terceraConta);
var_dump($segundaConta);

echo Conta::getNumeroDeContas();