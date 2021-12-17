<?php

namespace src\extrator;

class Xlsx extends Arquivo {

    // Realiza leitura de arquivos XLSX
    public function lerArquivo(string $caminho):array {

        // Lógica de leitura dos arquivos no formato ".xlsx"
        // ...

        // Simulação de retorno
        $this->setDados(
            'Ágatha Rodrigues Fernandes', // Nome
            '74043458630', // CPF
            'agatharodriguesfernandes@rhyta.com' // E-mail
        );

        return $this->getDados();
    }

}