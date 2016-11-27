<?php
	include 'ConexaoBD.class.php';

	class Usuarios {

	    public $nome;
	    public $senha;

			function mostrar(){
				$bd = new ConexaoBD;
				$bd->conectar();
				return $bd->query("SELECT * FROM login");
				$bd->fechar();
			}

			function loginUser($n, $s) {
	        $bd = new ConexaoBD();
	        $bd->conectar();
	        return $bd->query("SELECT * FROM login WHERE nome='$n' AND senha='$s'");
	        $bd->fechar();
	    }

			function inserir(){
				$bd = new ConexaoBD;
				$sql = "INSERT INTO login (nome, senha) VALUES ('$this->nome', '$this->senha')";
				$bd->conectar();
				$bd->query($sql);
				$bd->fechar();
			}
	}

?>
