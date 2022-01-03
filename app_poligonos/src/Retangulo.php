<?php

// Declara o namespace da qual a classe Retângulo fará parte
namespace src;

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

    // Calcura e retorna a área do retângulo
    public function getArea(): float {
        return $this->getLargura() * $this->getAltura();
    }
}