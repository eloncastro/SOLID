<?php

// Declara o namespace da qual a classe CarrinhoCompra fará parte
namespace src;

// Importa a classe "Itens" do namespace "src"
use src\Itens;

class CarrinhoCompra {

    // Atributos
    private $itens;

    // Método construtor
    public function __construct(){
        $this->itens = [];
    }

    // Retorna conteúdo do atributo itens constantes no objeto.
    public function getItens():array {
        return $this->itens;
    }

    // Adiciona itens ao carrinho.
    public function adicionarItem(Item $item):bool {
        array_push($this->itens, $item);
        return true;
    }

    // Verificação de conteúdo no carrinho de compras
    public function validarCarrinho():bool {
        return count($this->itens) > 0;
    }

}