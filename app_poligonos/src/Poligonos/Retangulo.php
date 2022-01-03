<?php

// Declara o namespace da qual a classe Retangulo fará parte
namespace src\poligonos;

class Retangulo {

    // Atributos
    protected $largura;
    protected $altura;

    // Setters e Getters
    public function setLargura (float $largura): void {
        $this->largura = $largura;
    }
    public function setAltura (float $altura): void {
        $this->altura = $altura;
    }
    public function getLargura (): float {
        return $this->largura;
    }
    public function getAltura (): float {
        return $this->altura;
    }
}