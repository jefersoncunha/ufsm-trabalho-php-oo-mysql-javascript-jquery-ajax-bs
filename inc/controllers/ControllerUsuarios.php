<?php
  include '../class/Usuarios.class.php';

  if($_POST["op"] == "incluir"){
    $nome = $_POST["nome"];
		$senha = $_POST["senha"];
		$obj = new Usuarios;
		$obj->nome = $nome;
		$obj->senha = $senha;
		$obj->inserir();
    echo "ok";
	}
  elseif ($_POST["op"] == "login"){

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
