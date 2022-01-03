<?php

// Declara o namespace da qual a interface fará parte
namespace src\interfaces;

// Importa as classes necessárias
use src\componentes\Notificacao;

// Implementação da interface
interface INotificacao {
    public function enviarNotificacao(Notificacao $notificacao): void;
}