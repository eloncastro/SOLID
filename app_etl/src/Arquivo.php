<?php

namespace src;

class Arquivo {

    // Atributos
    private $dados = array();

    // Getters e Setters
    public function getDados():array {
        return $this->dados;
    }

    public function setDados(string $nome, string $cpf, string $email):void {
        array_push($this->dados, [
            "nome" => iconv('iso-8859-1', 'utf-8', $nome),
            "cpf" => $cpf,
            "email" => $email
        ]);
    }

    // Realiza leitura de arquivos CSV
    public function lerArquivoCSV(string $caminho):void {

        $handle = fopen($caminho, 'r');

        while(($linha = fgetcsv($handle, 10000, ';')) !== false){
            $this->setDados($linha[0], $linha[1], $linha[2]);
        }

        fclose($handle);
    }

    // Realiza leitura de arquivos TXT
    public function lerArquivoTXT(string $caminho):void {

        $handle = fopen($caminho, 'r');

        while(!feof($handle)){

            // A cada execução o ponteiro de leitura do arquivo é incrementado
            $linha = fgets($handle);

            $this->setDados(
                trim(substr($linha, 11, 30)), // Nome
                trim(substr($linha, 0, 11)), // CPF
                trim(substr($linha, 41, 50)) // E-mail
            );
        }

        fclose($handle);
    }
}