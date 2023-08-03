<?php
  $matricula = $_POST["matricula"];
  $nome = $_POST["nome"];

  $alunos = []; // Alunos é um ARRAY que armazena os valores da matrícula e nome:
  $arrayResposta =
  [
    "matricula" => $matricula,
    "nome" => $nome 
  ];
  array_push($alunos, $arrayResposta);

  $converterJson = json_encode(["alunos" => $alunos]);
  echo($converterJson); // Enviado no sucesso!
?>
