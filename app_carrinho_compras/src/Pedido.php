<?php

// Declara o namespace da qual a classe Pedido fará parte
namespace src;

// Importa a classe "CarrinhoCompra" do namespace "src"
use src\CarrinhoCompra;

class Pedido {

    // Atributos
    private $status;
    private $carrinhoCompra;
    private $valorPedido;

    // Método construtor
    public function __construct(){
        $this->status = 'aberto';
        $this->carrinhoCompra = new CarrinhoCompra();
        $this->valorPedido = 0.00;
    }

    // Getters
    public function getCarrinhoCompra():CarrinhoCompra {
        return $this->carrinhoCompra;
    }

    public function getStatus():string {
        return $this->status;
    }

    // Setters
    public function setStatus(string $status):void {
        $this->status = $status;
    }

    // Realiza a confirmação do pedido
    public function confirmarPedido():bool {
        if($this->carrinhoCompra->validarCarrinho()){
            $this->setStatus('confirmado');
            return true;
        }else{
            return false;
        }
    }

}