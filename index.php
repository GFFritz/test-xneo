<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TO DO - Xneo</title>

  <!-- Importação do CSS -->
  <link rel="stylesheet" href="style.css">

  <!-- Importação do FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body>
  <div class="m-auto">
    <div class="container mx-auto">
      <div class="block-header">
        <div class="header-title">
          TO DO
        </div>

        <!-- Formulário de criação de Tarefa -->
        <form id="add-task" class="flex justify-between" onsubmit="createTask()">
          <div class="my-auto input-group">
            <input type="text" name="task-name" id="task-name" class="task-input" placeholder="Adicionar nova tarefa">
            <div id="error-msg"></div>
          </div>
          <button type="submit" class="submit-task my-auto"><i class="fa-solid fa-plus"></i></button>
        </form>
      </div>

      <!-- Aqui é carregada a lista de tarefas -->
      <div class="block-content" id="tasks-data"></div>

      <div class="footer mx-auto">
        Desenvolvido por <a href="mailto:gabrief.fritz@gmail.com">Gabriel Fritz</a> &copy; <?php echo date('Y') ?>
      </div>
    </div>
  </div>

  <!-- Importação do jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

  <!-- Importação do Arquivo principal JS -->
  <script type="text/javascript" src="main.js"></script>
</body>
</html>