<?php

// Declara o namespace da qual a classe fará parte
namespace src;

// Implementação da classe
class Sms implements IMensagemToken {

    public function enviar(): void {
        echo 'SMS: seu token é: 888-222';
    }
}