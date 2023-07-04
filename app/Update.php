<?php
// Neste arquivo é feita a atualização da descrição de uma tarefa

require_once('Connection.php');

$connection = New Connection();
$connect = $connection->Connect();

$data = $connect->prepare("UPDATE tasks SET name=? WHERE id=?");

// Verifica se o nome foi enviado
if (empty($_POST["name"])) {
  $errorMSG = "É necessário adicionar uma descrição";
} else {
  $name = $_POST["name"];
  $id = $_POST["id"];
}

if(empty($errorMSG)){
  $data->execute([$name, $id]);

	echo 'Task Editada com sucesso';
	exit;
}

http_response_code(400);
echo $errorMSG;

?>