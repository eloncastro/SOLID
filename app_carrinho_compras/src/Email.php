<?php

namespace src;

class Email {

    // Atributos
    private $de;
    private $para;
    private $assunto;
    private $conteudo;

    // Método construtor
    public function __construct(
        string $de = 'email@dominio.com.br',
        string $para = '',
        string $assunto = '',
        string $conteudo = ''
    ){
        $this->de = $de;
        $this->para = $para;
        $this->assunto = $assunto;
        $this->conteudo = $conteudo;
    }

    // Método estático para envio de e-mails
    public static function enviarEmail(){
        return '--- envia e-mail ---';
    }
}