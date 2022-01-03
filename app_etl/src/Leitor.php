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
    public function getDiretorio(): string {
        return $this->diretorio;
    }

    public function getArquivo(): string {
        return $this->arquivo;
    }

    public function setDiretorio(string $diretorio): void {
        $this->diretorio = $diretorio;
    }

    public function setArquivo(string $arquivo): void {
        $this->arquivo = $arquivo;
    }

    // Realiza a leitura do arquivo
    public function lerArquivo(): array|bool {
    
        // Define caminho completo do arquivo a ser lido
        $caminho = join(DIRECTORY_SEPARATOR, [$this->getDiretorio(), $this->getArquivo()]);
        
        // Identifica a extenção do arquivo
        $extensao = explode('.', $this->getArquivo());
        $extensao = end($extensao);

        // Define a classe a ser cha Chamada a partir da extenção, adequando o primeiro caractere.
        $classe = 'src\extrator\\' . ucfirst($extensao);

        // Verifica se a classe correspondente à extenção foi implementada
        if(class_exists($classe)) {
            // Retorna o resultado da chama à função de leitura na classe correspondente à extensão
            return call_user_func_array(
                [new $classe, 'lerArquivo'], // Passa a instancia da classe e o método a ser chamado
                [$caminho] // Envia o parâmetro exigido pelo método chamado
            );
        }

        return false;
    }
}