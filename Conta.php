<?php

class Conta{
    private $titular;
    private $nomeTitular;
    private $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular){
        $this -> titular = $titular;
        $this -> saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct(){
        if (self::$numeroDeContas > 0 ){
            echo PHP_EOL . "ha mais que um conta ativa" . PHP_EOL;
        }
    }

    public function saca(float $valorASacar): void{
        if ($valorASacar > $this->saldo){
            echo "Saldo Indisponivel";
            return;
        }
         $this -> saldo -= $valorASacar;
    }

    public function deposita(float $valorDep): void{
        if ($valorDep <= 0){
            echo "não pode";
            return;
        }
            $this -> saldo += $valorDep;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void{
        if ($valorATransferir > $this -> saldo){
            echo "Saldo Indisponivel";
            return;
        }
            $this -> saca($valorATransferir);
            $contaDestino -> deposita($valorATransferir);
    }

    public function recuperaSaldo():float{
        return $this -> saldo;
    }

    public static function recuperaNumeroDeContas(): int{
        return self::$numeroDeContas;
    }

    public function recuperaNomeTitular():string{
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular():string{
        return $this->titular->recuperaCpf();
    }


}