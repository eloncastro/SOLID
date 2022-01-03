<?php

// Declara o namespace da qual a classe Poligono fará parte
namespace src;

class Poligono {

    // Atributos
    private $forma;

    // Setters e Getters
    public function setForma (object $forma): void {
        $this->forma = $forma;
    }
    public function getForma (): object {
        return $this->forma;
    }

    // Calcura e retorna a área do polígono
    public function getArea(): float {
        return $this->getForma()->getLargura() * $this->getForma()->getAltura();
    }
}