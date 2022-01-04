<?php

// Declara o namespace da qual a classe fará parte
namespace src;

// Importa interface necessária
use src\IMensagemToken;

// Implementação da classe
class Mensageiro {

    // Atributos
    private $canal;

    // Construtor
    public function __construct(IMensagemToken $canal) {
        $this->setCanal($canal);
    }

    // Getters e Setters
    public function getCanal(): IMensagemToken {
        return $this->canal;
    }
    public function setCanal(IMensagemToken $canal): void {
        $this->canal = $canal;
    }

    // Realiza envio do token
    public function enviarToken(): void {
        
        $this->getCanal()->enviar();
    }
}