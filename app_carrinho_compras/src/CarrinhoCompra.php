<?php

namespace src;

class CarrinhoCompra {
    
    // Atributos
    private $itens;
    private $status;
    private $valorTotal;
    
    // Método construtor
    public function __construct(){
        $this->itens = [];
        $this->status = 'aberto';
        $this->valorTotal = 0.00;
    }

    // Retorna conteúdo do atributo itens constantes no objeto.
    public function exibirItens(){
        return $this->itens;
    }

    // Adiciona itens no atributo, seguindo o padrão: Descrição e Valor.
    public function adicionarItem(string $item, float $valor){
        array_push($this->itens, ["item"=>$item, "valor"=>$valor]);
        $this->valorTotal += $valor;
        return true;
    }

    // Retorna valor total dos itens no carrinho
    public function exibirValorTotal(){
        return $this->valorTotal;
    }

    // Retorna status do carrinho
    public function exibirStatus(){
        return $this->status;
    }

    // Confirma pedido: alteração do status para confirmado
    public function confirmarPedido(){
        if($this->validarCarrinho()){
            $this->status = 'confirmado';
            $this->enviarEmailConfirmacao();
            return true;
        }
        return false;
    }

    // Envia e-mail de confirmação do pedido
    public function enviarEmailConfirmacao(){
        print '<br>...E-mail de confirmação enviado...<br>';
    }

    // Verifica se carrinho está vazio
    public function validarCarrinho(){
        return count($this->itens) > 0;
    }
}