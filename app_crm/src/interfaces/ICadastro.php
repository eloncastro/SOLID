<?php

// Declara o namespace da qual a interface fará parte
namespace src\interfaces;

// Importa as classes necessárias
use src\componentes\Log;
use src\componentes\Notificacao;

// Implementação da interface
interface ICadastro {
    public function salvar(): void;
    public function registrarLog(Log $log): void;
    public function enviarNotificacao(Notificacao $notificacao): void;
}