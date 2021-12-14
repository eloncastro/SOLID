<?php

use PHPUnit\Framework\TestCase;
use src\Item;

class ItemTest extends TestCase {

    // Valida estado inicial dos atributos da classe "Item"
    public function testEstadoInicialDaClasse(): void{
        $item = new Item();

        // Asserções
        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());
    }

    // Valida os métodos Get e Set do atributo "Descrição"
    public function testGetSetDescricao():void {
        $descricao = 'Cadeira de plástico';

        $item = new Item();

        $item->setDescricao($descricao);
        $this->assertEquals($descricao, $item->getDescricao());
    }

    // Valida os métodos Get e Set do atributo "Valor"
    public function testGetSetValor():void {
        $valor = 15;

        $item = new Item();

        $item->setValor($valor);
        $this->assertEquals($valor, $item->getValor());
    }

    // Valida os possíveis retornos do método "validarItem"
    public function testValidaItem():void {

        $item = new Item();

        // Envio de um item com parâmetros inválidos, esperando retorno "false"
        $this->assertEquals(false, $item->validarItem());

        // Envio de um item com parâmetro "descrição" inválido, esperendo o retorno "false"
        $item->setValor(55);
        $item->setDescricao('');
        $this->assertEquals(false, $item->validarItem());

        // Envio de um item com parâmetro "valor" inválido, esperendo o retorno "false"
        $item->setValor(0);
        $item->setDescricao('Cadeira de plástico');
        $this->assertEquals(false, $item->validarItem());

        // Envio de um item com parâmetros válidos, esperando retorno "true"
        $item->setValor(55);
        $this->assertEquals(true, $item->validarItem());
    }
}