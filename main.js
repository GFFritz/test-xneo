// Aqui carrega a lista de tasks quando a página é carregada
document.addEventListener("DOMContentLoaded", function() {
  refresh();
});

// Função de criação de Task
function createTask() {
  event.preventDefault(); 
  var data = $('#add-task').serialize();
   
  $.ajax({
      url:'app/Create.php',
      data:data,
      type:'POST',
      success:function(response){
        refresh()
        console.log(response)
      },
      error: function(response) {
        $('#error-msg').html(response.responseText).css("display", "block");
      }
    });
};

$('#task-name').click(function(e) {
  e.preventDefault(); 
  $('#error-msg').css("display", "none");
});

// Função para listagem dos resultados do banco
function refresh() {
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
      var list = document.getElementById("tasks-data");
      list.innerHTML = xmlhttp.responseText;
    }
  };

  xmlhttp.open("GET", "app/List.php", true);

  xmlhttp.send();
};

// Função de exclusão de uma task
function removeTask(id) {
  if (confirm("Tem certeza de que deseja excluir esta Task?")) {
    $.ajax({
      url: "app/Delete.php",
      type: "POST",
      data: {id: id},
      success: function(response) {
        alert("Registro excluído com sucesso!");
        refresh();
      },
      error: function(xhr, status, error) {
        alert("Ocorreu um erro ao excluir o registro: " + error);
      }
    });
  }
};

// Função de Renomeação de uma task
function renameTask(form, id) {
  event.preventDefault();

  var formData = $(form).serialize();

  $.ajax({
    type: 'POST',
    url: 'app/Update.php',
    data: formData + '&id=' + id,
    success:function(response){
      refresh()
      console.log(response)
    },
    error: function(response) {
      $('#error-msg-alt').html(response.responseText).css("display", "block");
    }
  });
};


// Função de atualização do Status da task
function statusChange(input, id) {
  var status = $(input).prop('checked') ? 1 : 0;

  $.ajax({
    url: 'app/Status.php',
    type: 'POST',
    data: { id: id, status: status },
    success: function(response) {
      refresh()
    }
  });
};