<?php
require_once 'funcoes.php';
require_once 'funcoes.php';

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
    11 => ['titular' => 'Luãn',
            'saldo' => 1500], 
    12 => ['titular' => 'Lucas',
            'saldo' => 2000]
];
$contasCorrentes[] = [
    'titular' => 'Fulano',
    'saldo' =>  1000000
];

$contasCorrentes[10] = sacar($contasCorrentes[10], valorASacar:500);
$contasCorrentes[11] = depositar($contasCorrentes[11], valorTed:500);

unset($contasCorrentes[12]);

titularComLetrasmaiusculas($contasCorrentes[11]); 

echo "<ul>";

foreach ($contasCorrentes as $cpf => $conta){
    exibeconta($conta);
}
echo "</ul>";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Treino</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta ){ ?>
        <dt>
            <h3><?php echo $conta['titular'];?> - <?php echo $cpf ?>;</h3>
        </dt>
        <dd>
            Saldo: <?php echo  $conta['saldo'];?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>