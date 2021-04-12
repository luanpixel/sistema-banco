<?php

require_once 'src\Conta.php';
require_once 'src\Titular.php';
require_once 'src\CPF.php';


$luan = new Titular(new CPF(numero: '123.456.789-10'), nome: 'Luana');
$primeiraConta = new Conta($luan);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta -> recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta -> recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta -> recuperaSaldo() . PHP_EOL;

$lucas = new Titular(new CPF(numero: '321654987321'), nome: 'Lucas');
$segundaConta = new Conta($lucas);
echo PHP_EOL . $segundaConta -> recuperaNomeTitular() . PHP_EOL;
echo $segundaConta -> recuperaCpfTitular() . PHP_EOL;
echo $segundaConta -> recuperaSaldo() . PHP_EOL;

var_dump($primeiraConta);

//echo "numero de contas: " . Conta::recuperaNumeroDeContas();



