<?php
// Neste arquivo é feita a criação de uma tarefa

require_once('Connection.php');

$connection = New Connection();
$connect = $connection->Connect();

$data = $connect->prepare("INSERT INTO tasks(name) VALUES(:name) ");

// Verifica se o nome foi enviado
if (empty($_POST["task-name"])) {
  $errorMSG = "É necessário adicionar uma descrição";
} else {
  $name = $_POST["task-name"];
}

if(empty($errorMSG)){
  $data->execute([
    ':name' => $name
  ]);

	echo 'Task adicionada com sucesso';
	exit;
}

http_response_code(400);
echo $errorMSG;

?>