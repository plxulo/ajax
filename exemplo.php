<?php
  include("conecta.php");
  
  $nome      = $_POST["nome"];    
  $matricula = $_POST["matricula"];
  $empregados = []; 
  $acao = $_POST["acao"];

  $resposta = 
  [
      "nome"      => $nome,
      "matricula" => $matricula
  ];

  array_push($empregados, $resposta);

  if($acao === "excluir") {
    $comando = $pdo->prepare("DELETE FROM alunos WHERE matricula = :matricula");
    $comando->bindParam(':matricula', $matricula);
    $comando->execute();
  }
  else {
    $comando = $pdo->prepare("INSERT INTO alunos VALUES(:matricula, :nome)");
    $comando->bindParam(':matricula', $matricula);
    $comando->bindParam(":nome", $nome);
    $comando->execute(); 
  }
  $json_texto = json_encode(["empregados" => $empregados]);
  echo($json_texto);  
?>