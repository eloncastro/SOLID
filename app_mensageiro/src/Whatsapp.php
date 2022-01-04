<?php

// Declara o namespace da qual a classe fará parte
namespace src;

// Implementação da classe
class Whatsapp implements IMensagemToken {

    public function enviar(): void {
        echo 'Whatsapp: seu token é: 578-216';
    }
}