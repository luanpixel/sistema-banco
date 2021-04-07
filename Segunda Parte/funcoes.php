<?php
function sacar(array $conta, float $valorASacar): array 
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem(mensagem:"Você não pode sacar esse valor");
    }else{
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorTed): array
{
    if ($valorTed > 0) {
        $conta['saldo'] += $valorTed;
        echo "você fez um TED<br/>";
    }else{
        exibeMensagem(mensagem: "Deposito precisa ser positivo");
    }
    
    return $conta;
}

function exibeMensagem(string $mensagem){
    echo $mensagem . "<br/>";
}
function titularComLetrasMaiusculas(array &$conta){
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta (array $conta){
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
   echo "<li>Titular: $titular . Saldo: $saldo</li>";
}

?>
