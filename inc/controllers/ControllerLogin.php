<?php
  include '../class/Usuarios.class.php';

  // var_dump($_POST);

  if ($_POST["op"] == "login"){

    $senhaInput = $_POST["senha"];
    $nomeInput  = $_POST["nome"];

    $obj = new Usuarios;
    $resutado = $obj->loginUser($nomeInput, $senhaInput);

    // se o resultado for 0 nao existe nenhum login com essas informacoes.
    if(mysqli_num_rows($resutado)>0){
      session_start();
      $_SESSION['login'] = $nomeInput;
      echo "ok";
    }else
      echo "erro";

  }
?>
