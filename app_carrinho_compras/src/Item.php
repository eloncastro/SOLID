<?php

// Declara o namespace da qual a classe Item fará parte
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

    // Valida parâmetros necessários aos ítens
    public function validarItem():bool {
        if(empty($this->descricao)){
            return false;
        }
        if(!is_numeric($this->valor) || $this->valor <= 0){
            return false;
        }
        return true;
    }

}