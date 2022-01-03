<?php

// Declara o namaspace da qual a classe Quadrado fará parte
namespace src\poligonos;

class Quadrado {

    // Atributos
    protected $largura;
    protected $altura;

    // Setters e Getters
    public function setLargura (float $largura): void {
        // Atribui simultaneamente a altura e largura a partir do parâmetro largura 
        $this->largura = $this->altura = $largura;
    }
    public function setAltura (float $altura): void {
        // Atribui simultaneamente a altura e largura a partir do parâmetro largura 
        $this->largura = $this->altura = $altura;
    }
    public function getLargura (): float {
        return $this->largura;
    }
    public function getAltura (): float {
        return $this->altura;
    }


}