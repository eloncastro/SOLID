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
        // Instancia objeto "Arquivo" para realizar a leitura
        $arquivo = new Arquivo();

        // Define caminho completo do arquivo a ser lido
        $caminho = join(DIRECTORY_SEPARATOR, [$this->getDiretorio(), $this->getArquivo()]);
        
        // Identifica a extenção do arquivo
        $extensao = explode('.', $this->getArquivo());
        $extensao = end($extensao);

        // Chama o método de acordo com a extensão do arquivo a ser lido
        if(strtolower($extensao) == 'csv'){
            $arquivo->lerArquivoCSV($caminho);

        }elseif(strtolower($extensao) == 'txt'){
            $arquivo->lerArquivoTXT($caminho);

        }else{
            throw new Exception("O arquivo submetido possui uma extensão não configurada para leitura.");
        }

        return $arquivo->getDados();
    }
}