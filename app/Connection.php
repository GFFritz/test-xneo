<?php 
// Esta classe faz a conexão com o Banco de Dados
// Configurar de acordo com o seu banco de dados

Class Connection {
  public function Connect() {
    $host = 'localhost';      // Host do Banco de dados
    $user = 'root';           // Usuário do Banco de dados
    $password = '';           // Senha do Banco de dados
    $database = 'todo-xneo';  // Nome do Banco de dados

    $db = new PDO("mysql:
      host=" . $host . ";
      dbname=" . $database,
      $user,
      $password
    );

    return $db;
  }
}