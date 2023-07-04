<?php 
// Neste arquivo é feita a listagem das tarefas para o usuário.

require_once('Connection.php');

$connection = New Connection();

$connect = $connection->Connect();

$data = $connect->query("SELECT * FROM tasks order by 'create_at' desc");

$data = $data->fetchAll();

if (empty($data)) {
  $listagemHTML = '<div class="notasks">Você não tem Tasks</div>';
} else {
// Constrói a listagem em formato HTML
  $listagemHTML = '<div class="task-list">';
  foreach ($data as $item) {
    $listagemHTML .= '<div class="task-item flex justify-between">';

    // Verifica o Status da task
    $check = '';
    if ($item['status'] == 1) {
      $check = 'checked';
    }

    $listagemHTML .= '<input id="status-change" class="input-status" type="checkbox" onclick="statusChange(this, '. $item['id'] .')" '.$check.'>';
    $listagemHTML .= '<form id="rename-task" class="editable my-auto" onsubmit="renameTask(this,'. $item['id'] .')">';
    $listagemHTML .= '<input name="name" id="name" value="'. $item['name'] .'">';
    $listagemHTML .= '<div id="error-msg-alt"></div>';
    $listagemHTML .= '</form>';
    $listagemHTML .= '<button class="task-action my-auto" id="delete-action" onclick="removeTask('. $item['id'] .')"><i class="fa-solid fa-trash"></i></button>';
    $listagemHTML .= '</div>';
  }
  $listagemHTML .= '</div>';
}

echo $listagemHTML;
