<?php

// Declara o namespace da qual a classe Txt fará parte
namespace src\extrator;

class Txt extends Arquivo {

    // Realiza leitura de arquivos TXT
    public function lerArquivo(string $caminho):array {

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

        return $this->getDados();
    }

}