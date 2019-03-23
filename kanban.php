<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Curso JS</title>
  </head>
  <body>
<?php

$diaDaSemana = date("w");
switch ($diaDaSemana)
{   case 0:
      echo "<h1>Tenha um ótimo Domingo!</h1>";
      break;
      
      case 1:
      echo "<h1>Tenha uma ótima Segunda-feira!</h1>";
      break;
      
      case 2:
      echo "<h1>Tenha uma ótima Terça-feira!</h1>";
      break;
      
      case 3:
      echo "<h1>Tenha uma ótima Quarta-feira!</h1>";
      break;
          
      case 4:
      echo "<h1>Tenha uma ótima Quinta-feira!</h1>";
      break;
      
      case 5:
      echo "<h1>Tenha uma ótima Sexta-feira!</h1>";
      break;
      
      case 6:
      echo "<h1>Tenha um ótimo Sabado!</h1>";
      break;
}   
?>
    <h3>LISTA DE TAREFAS</h3>
    <div id="app">
      <ul></ul>
      <input type="text" placeholder="Adicione uma tarefa...">
      <button>Adicionar</button>
    </div>

<script src="js/todos.js"></script>
  </body>
</html>
