<?php

namespace src;

class Item {

    // Atributos
    private $descricao;
    private $valor;

    // Método construtor
    public function __construct(){
        $this->descricao = '';
        $this->valor = 0.00;
    }

    // Getters
    public function getDescricao():string {
        return $this->descricao;
    }

    public function getValor():float {
        return $this->valor;
    }

    // Setters
    public function setDescricao(string $descricao):void {
        $this->descricao = $descricao;
    }

    public function setValor(float $valor):void {
        $this->valor = $valor;
    }

}