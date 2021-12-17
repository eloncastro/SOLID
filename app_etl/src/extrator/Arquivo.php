<?php

// Declara o namespace da qual a classe Arquivo fará parte
namespace src\extrator;

class Arquivo {

    // Atributos
    private $dados = array();

    // Getters e Setters
    public function getDados():array {
        return $this->dados;
    }

    public function setDados(string $nome, string $cpf, string $email):void {
        // Verifica se codificação do parâmetro "nome" é diferente de "UTF-8"
        if(mb_detect_encoding($nome) !== 'UTF-8'){
            // Converte para "UTF-8" a codificação original do parâmetro
            $nome = iconv(mb_detect_encoding($nome), 'utf-8', $nome);
        }

        // Realiza inclusão dos valores ao atributo "dados"
        array_push($this->dados, [
            "nome" => $nome,
            "cpf" => $cpf,
            "email" => $email
        ]);
    }
}