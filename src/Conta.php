<?php

class Conta{
    public $cpfTitular;
    public $nomeTitular;
    public $saldo = 0;

    public function sacar(float $valorASacar){
        if ($valorASacar > $this->saldo){
            echo "Saldo Indisponivel";
        } else {
            $this -> saldo -= $valorASacar;
        }
    }

    public function depositar(float $valorDep){
        if ($valorDep <= 0){
            echo "não pode";
        } else {
            $this -> saldo += $valorDep;
        }
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void{
        if ($valorATransferir > $this -> saldo){
            echo "Saldo Indisponivel";
        } else {
            $this -> sacar($valorATransferir);
            $contaDestino -> depositar($valorATransferir);
        }
    }

}