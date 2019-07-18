<?php
  $nomeArquivo = "usuarios.json";

  function cadastrarUsuario($usuario) {
    global $nomeArquivo;

    $jsonUsuarios = file_get_contents($nomeArquivo);

    $arrayUsuarios = json_decode($jsonUsuarios, true);

    array_push($arrayUsuarios["usuarios"], $usuario);

    $jsonUsuarios = json_encode($arrayUsuarios, JSON_UNESCAPED_SLASHES);

    $cadastrou = file_put_contents($nomeArquivo, $jsonUsuarios);

    return $cadastrou;
  }

  function logarUsuario($email, $senha) {
    global $nomeArquivo;
    $logado = false;

    $jsonUsuarios = file_get_contents($nomeArquivo);

    $arrayUsuarios = json_decode($jsonUsuarios, true);

    foreach ($arrayUsuarios["usuarios"] as $key => $value) {
      if ($email == $value["email"] && password_verify($senha, $value["senha"])){
          $nomeUsuario = $value["nome"];
          session_start(){
            $_SESSION["logado"] = true;;
            $_SESSION["email"] = $email;
            $_SESSION["nome"] = $nomeLogado;
            $_SESSION["nivelAcesso"] = $value["nivelAcesso"];
          
          break;
      }
    }

    return $nomeUsuario;
  }
?>
