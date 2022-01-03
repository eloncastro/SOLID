<?php

// Declara o namespace da qual a classe fará parte
namespace src;

// Importa classes necessárias
use src\Email;

// Implementação da classe
class Mensageiro {

    // Atributos
    private $canal;

    // Getters e Setters
    public function getCanal(): string {
        return $this->$canal;
    }
    public function setCanal(string $canal): void {
        $this->canal = $canal;
    }

    // Realiza envio do token
    public function enviarToken(): void {
        
        $classe = '\src\\' . ucfirst($this->canal);
        echo  $classe . '<br>';

        $obj = new $classe;
        $obj->enviar();
    }
}