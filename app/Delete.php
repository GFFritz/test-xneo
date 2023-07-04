<?php
// Neste arquivo é feita a exclusão de uma tarefa

require_once('Connection.php');

$connection = New Connection();
$connect = $connection->Connect();

// Verifica se o ID foi enviado
if (isset($_POST['id'])) {
  $id = $_POST['id'];

  $data = $connect->prepare("DELETE FROM tasks WHERE id =?")->execute([$id]);
  
  echo 'Task removida com sucesso';
  exit;
} 

http_response_code(400);
echo 'Algo deu Errado.';

?>