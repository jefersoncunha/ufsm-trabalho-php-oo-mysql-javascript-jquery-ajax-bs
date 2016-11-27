<?php
  include '../class/Clientes.class.php';

  // var_dump($_POST);
  // var_dump($_GET);

  // $op = $_GET["op"];
  $op = $_POST["op"];

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
	elseif ($op == "Editar"){
    $id = $_POST["id"];
		$nome = $_POST["nome"];
		$fone = $_POST["fone"];
		$email = $_POST["email"];

		$obj = new Clientes;
		$obj->id = $id;
		$obj->nome = $nome;
		$obj->fone = $fone;
		$obj->email = $email;
		$obj->atualizarClientes();
	}
	elseif ($op == "excluir"){
		$id = $_POST["id"];
		$obj = new Clientes;
		$obj->excluir($id);
    echo "Cliente".$id."Excluido!";
	}
?>
