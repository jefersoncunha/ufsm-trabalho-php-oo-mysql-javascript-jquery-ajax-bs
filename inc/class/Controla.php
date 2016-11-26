<?php
  include 'Clientes.class.php';
	$op = $_POST["op"];
	session_start();

	if($op == "incluir"){

    $nome = $_POST["nome"];
		$fone = $_POST["fone"];
		$email = $_POST["email"];

		$obj = new Clientes;
		$obj->nome = $nome;
		$obj->fone = $fone;
		$obj->email = $email;
		$obj->inserir();

		// $_SESSION['mensagem']='Clientes cadastrada com sucesso';
		// $_SESSION['local']='enviarClientes.php';
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

		// $_SESSION['mensagem']='Clientes alterada com sucesso';
		// $_SESSION['local']='listarClientes.php';

	}

	elseif($op == "Excluir"){
		$id = $_POST["id"];

		// echo "<meta http-equiv='refresh'
		// content='0;url=jquerymodal.php?numero=2&id=$id'>";

	}

	elseif ($op == "Sim"){
		$id = $_POST["id"];
		$obj = new Clientes;
		$obj->excluir($id);

		// $_SESSION['mensagem']='Clientes excluída com sucesso';
		// $_SESSION['local']='listarClientes.php';
    //
		// echo "<meta http-equiv='refresh'
		// content='0;url=jquerymodal.php?numero=1'>";
	}
?>
