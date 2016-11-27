<?php
	include 'ConexaoBD.class.php';

	class Usuarios {

	    public $nome;
	    public $senha;

	    function loginUser($n, $s) {
	        $bd = new ConexaoBD();
	        $bd->conectar();
	        return $bd->query("SELECT * FROM login WHERE nome='$n' AND senha='$s'");
	        $bd->fechar();
	    }
	}

?>
