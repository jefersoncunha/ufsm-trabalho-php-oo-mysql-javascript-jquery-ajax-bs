<?php
  include '../class/Clientes.class.php';
  include '../class/Usuarios.class.php';

  $op = $_POST["op"];
  // var_dump($_POST);

	if($op == "incluir"){
    $nome = $_POST["nome"];
		$fone = $_POST["fone"];
		$email = $_POST["email"];
		$obj = new Clientes;
		$obj->nome = $nome;
		$obj->fone = $fone;
		$obj->email = $email;
		$obj->inserir();
    echo "ok";
	}
	elseif ($op == "editar"){
    $id = $_POST["id"];
		$nome = $_POST["nome"];
		$fone = $_POST["fone"];
		$email = $_POST["email"];
		$obj = new Clientes;
		$obj->id = $id;
		$obj->nome = $nome;
		$obj->fone = $fone;
		$obj->email = $email;
		$obj->editar();
    echo "ok";
	}
	elseif ($op == "excluir"){
		$id = $_POST["id"];
		$obj = new Clientes;
		$obj->excluir($id);
    echo "ok";
	}
?>
