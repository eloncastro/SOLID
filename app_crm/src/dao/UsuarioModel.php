<?php

// Declara o namespace da qual a classe fará parte
namespace src\dao;

// Importa as classes e interfaces necessárias
use src\BD;
use src\interfaces\ICadastro;

use src\componentes\Log;
use src\componentes\Notificacao;

// Implementação da classe
class UsuarioModel extends BD implements ICadastro  {

    public function salvar(): void {
        // Implementação
    }

    public function registrarLog(Log $log): void {
        // Implementação
    }

    public function enviarNotificacao(Notificacao $notificacao): void {
        // Implementação
    }
    
}