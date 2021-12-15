<?php

// Declara o namespace da qual a classe Leitor fará parte
namespace src;

// Importa a classe "Arquivo" do namespace "src"
use src\Arquivo;

class Leitor {

    // Atributos
    private $diretorio = '';
    private $arquivo = '';

    // Setters e Getters
    public function getDiretorio():string {
        return $this->diretorio;
    }

    public function getArquivo():string {
        return $this->arquivo;
    }

    public function setDiretorio(string $diretorio):void {
        $this->diretorio = $diretorio;
    }

    public function setArquivo(string $arquivo):void {
        $this->arquivo = $arquivo;
    }

    // Realiza a leitura do arquivo
    public function lerArquivo():array {
        $caminho = join(DIRECTORY_SEPARATOR, [$this->getDiretorio(), $this->getArquivo()]);

        $arquivo = new Arquivo();
        $arquivo->lerArquivoCSV($caminho);

        return $arquivo->getDados();
    }
}