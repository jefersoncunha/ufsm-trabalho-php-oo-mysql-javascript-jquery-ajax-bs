<?php
	include 'ConexaoBD.class.php';

	class Clientes{
		public $id;
		public $nome;
		public $fone;
		public $email;

		function inserir(){
			$bd = new ConexaoBD;
			$sql = "INSERT INTO Clientes (nome, fone, email)
							VALUES ('$this->nome', '$this->fone', '$this->email')";
			$bd->conectar();
			$bd->query($sql);
			$bd->fechar();
		}

		function mostrar(){
			$bd = new ConexaoBD;
			$bd->conectar();
			return $bd->query("SELECT * FROM Clientes");
			$bd->fechar();
		}

		function buscarCliente($id){
			$bd = new ConexaoBD;
			$bd->conectar();
			return $bd->query("SELECT * FROM Clientes WHERE id='$id'");
			$bd->fechar();
		}

		function atualizarClientes(){
			$bd = new ConexaoBD;
			$bd->conectar();
			$bd->query(
				" UPDATE Clientes
					SET nome='$this->nome',fone='$this->fone', email='$this->email'
					WHERE id='$this->id'");
			$bd->fechar();
		}

		function excluir($id){
			$bd = new ConexaoBD;
			$sql = "DELETE FROM Clientes WHERE id='$id'";
			$bd->conectar();
			$bd->query($sql);
			$bd->fechar();
		}

	}
?>
