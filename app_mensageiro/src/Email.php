<?php

// Declara o namespace da qual a classe fará parte
namespace src;

// Implementação da classe
class Email implements IMensagemToken {

    public function enviar(): void {
        echo 'E-mail: seu token é: 555-333';
    }
}