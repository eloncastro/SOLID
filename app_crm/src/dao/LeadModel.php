<?php

// Declara o namespace da qual a classe fará parte
namespace src\dao;

// Importa as classes e interfaces necessárias
use src\BD;
use src\interfaces\ICadastro;
use src\interfaces\INotificacao;

use src\componentes\Notificacao;

// Implementação da classe
class LeadModel extends BD implements ICadastro, INotificacao  {

    public function salvar(): void {
        // Implementação
    }

    public function enviarNotificacao(Notificacao $notificacao): void {
        // Implementação
    }
    
}