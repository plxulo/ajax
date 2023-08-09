<?php
  include("../../inc/db-connection.inc.php");

  $nome  = $_POST["nome"];    // Campos "name" inseridos no <form>
  $idade = $_POST["idade"];
  $sexo  = $_POST["sexo"];
  $telefone = $_POST["telefone"];
  $cidade = $_POST["cidade"];
  $email = $_POST["email"];

  $empregados = [];  // Variável usada para guardar os dados acima no formato JSON.

  // O trecho abaixo pode estar dentro de um WHILE para guardar a resposta de um SELECT por exemplo
  // Neste exemplo estamos apenas devolvendo o que o usuário digitou no formulário
  $resposta = 
  [
    "nome"  => $nome,
    "idade" => $idade,
    "sexo"  => $sexo,
    "telefone" => $telefone,
    "cidade" => $cidade,
    "email" => $email
  ];

  array_push($empregados, $resposta);
  // Até aqui ficaria dentro do WHILE.

  // Ao sair do WHILE enviamos de volta para a função JavaScript no formato JSON:
  $json_texto = json_encode(["empregados" => $empregados]);
  echo($json_texto);  // Será retornado para dentro do "success" do arquivo index.html

?>