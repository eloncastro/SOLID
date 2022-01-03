<?php

// Declara o namespace da qual a interface fará parte
namespace src\interfaces;

// Importa as classes necessárias
use src\componentes\Log;

// Implementação da interface
interface ILog {
    public function registrarLog(Log $log): void;
}