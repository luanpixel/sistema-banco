<?php
/*$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'Luan',
    'saldo' => 1500,
];
$conta3 = [
    'titular' => 'Lucas',
    'saldo' => 2000,
];*/

$contasCorrentes = [
    10 => ['titular' => 'Vinicius',
            'saldo' => 1000],
    11 => ['titular' => 'Luan',
            'saldo' => 1500], 
    12 => ['titular' => 'Lucas',
            'saldo' => 2000]
];

$contasCorrentes[] = [
    'titular' => 'Fulano',
    'saldo' =>  1000000
];

$contasCorrentes[] = [
    'titular' => "Luaniro",
    'saldo' => "12"
];

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . " " . $conta ['titular'] . "<br/>";
}
?>