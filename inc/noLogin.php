<?php
	session_start();
	if (!isset($_SESSION['login'])){
		$_SESSION['noLogin'] = "Usuario nao esta logado";
		echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
	}
?>
