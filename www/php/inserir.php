<?php
  include("../../inc/db_connection.inc.php");
  $matricula = $_POST["matricula"];
  $nome = $_POST["nome"];

  $alunos = []; // Alunos é um ARRAY que armazena os valores da matrícula e nome:
  $arrayResposta =
  [
    "matricula" => $matricula,
    "nome" => $nome 
  ];
  array_push($alunos, $arrayResposta);

  $insert = $pdo->prepare("INSERT INTO aluno (matricula, nome) VALUES (:matricula, :nome)");
  $insert->bindParam(":matricula", $matricula);
  $insert->bindParam(":nome", $nome);
  $insert->execute();  

  $converterJson = json_encode(["alunos" => $alunos]);
  echo($converterJson); // Enviado no sucesso!
?>