<?php

    include_once("../config/conn.php");

    $id = $_REQUEST["id"];
    $nome = $_REQUEST["nome"];
    $email = $_REQUEST["email"];
    $senha = $_REQUEST["senha"];

    $sql = "UPDATE redatores SET nome = :nome, email = :email, senha = :senha WHERE id = :id";
  
    $query = $db->prepare($sql);

    $alterou = $query->execute([
        ":id" => $id,
        ":nome" => $nome,
        ":email" => $email,
        ":senha" => password_hash($senha, PASSWORD_DEFAULT)
      ]);

      if(iset($alterou) && $alterou){
          echo "Cadastro de redator alterado com sucesso"
      }else{
          echo "A alteração Falhou"
      }
      }
?>