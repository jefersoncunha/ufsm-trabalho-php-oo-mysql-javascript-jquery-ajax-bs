<?php
	class ConexaoBD{
		private $servidor;
		private $usuario;
		private $senha;
		private $db;
		private $con;

		public function __construct(){
			$this->servidor='mysql427.umbler.com';
			$this->usuario='jef';
			$this->senha='9RjsGUHD4dnP';
			$this->db='php-aula';
			$this->porta='41890';
		}

		public function conectar(){
			global $con;

			$con = mysqli_init();
			$success = mysqli_real_connect(
				 $con,
				 $this->servidor,
				 $this->usuario,
				 $this->senha,
				 $this->db
				 $this->porta
			) or die (mysqli_error());
		}

		public function fechar(){
			global $con;
			mysqli_close($con);
		}

		public function query($sql){
			global $con;
			$query = mysqli_query($con, $sql) or die (mysqli_error());
			return $query;
		}
	}
?>
