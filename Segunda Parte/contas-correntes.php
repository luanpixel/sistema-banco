<?php
$conta1 = [
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
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i=0; $i < count($contasCorrentes); $i++) { 
    echo $contasCorrentes[$i]['titular']  . "<br/>";
}

?>