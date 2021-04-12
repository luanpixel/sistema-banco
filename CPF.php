<?php


class CPF
{
    private $numero;

    public function __construct(string $numero){
        if ($numero === false){
            echo "Cpf Invalido";
            exit();
        }
        $this->numero = $numero;
    }

    public function recuperaNumero(): string{
        return $this->numero;
    }

}