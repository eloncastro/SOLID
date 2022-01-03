<?php

// Declara o namaspace da qual a classe Quadrado fará parte
namespace src;

class Quadrado extends Retangulo {

    // Atributos herdados da classe pai Retangulo

    // Setters
    public function setLargura(float $largura): void {
        // Atribui simultaneamente a altura e largura a partir do parâmetro largura 
        $this->largura = $this->altura = $largura;
    }
    public function setAltura(float $altura): void {
        // Atribui simultaneamente a altura e largura a partir do parâmetro altura 
        $this->largura = $this->altura = $altura;
    }

}