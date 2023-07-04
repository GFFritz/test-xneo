## Lista de Tarefas desenvolvida por Gabriel Fritz

# Sobre Projeto
Como foi solicitado. Neste projeto não tem nenhuma framework de Front-end nem Back-end. 
Duas libs foram adicionadas no projeto: JQuery e FontAwesome para os icones.
Ambas as libs são utilizadas via CDN

O projeto possui um CRUD básico, o usuário pode adicionar novas tarefas, editar o titulo de uma tarefa, remover uma tarefa e alterar o status de uma tarefa. Tembém foi feito um tratamento de erro na validação do campo de titulo da tarefa, quando vazio. Sempre que uma alteração é feita a lista atualiza, sem mudar refresh na página.

# Instalação:
- Criar um banco de dados com;
- Configurar as credencias do seu mysql e o nome do banco no arquivo: app/Connection.php;
- Importar a tabela do arquivo: "database/db.sql" no seu banco;
- Rodar a partir da versão 7 do PHP;