<?php
// Neste arquivo é feita a atualização do status de uma tarefa

require_once('Connection.php');

$connection = New Connection();
$connect = $connection->Connect();

$data = $connect->prepare("UPDATE tasks SET status=? WHERE id=?");

$status = $_POST["status"];
$id = $_POST["id"];

$data->execute([$status, $id]);

echo 'Task Editada com sucesso';

?>