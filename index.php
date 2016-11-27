<!DOCTYPE html>
<html lang="pt-br">
	<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Controle de Clientes</title>
      <?php include "inc/views/_partials/head.php" ?>
      <link rel="stylesheet" href="assets/css/login.css">

  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <h1 class="text-center login-title">Controle De Pagamentos</h1>
                <div class="account-wall">
                    <img class="profile-img" src="http://jefersoncunha.com/assets/images/jef_100x100.png"
                        alt="">
                    <form class="login-form" method="post">
                    <input type="text" class="form-control" placeholder="nome" id="nome" name="nome" required autofocus style="margin-top: 10px;">
                    <input type="text" class="form-control" placeholder="senha" id="senha" name="senha"required style="margin-top: 10px;">
										<input type="hidden" name="op" value="login"/>
										<button class="btn btn-lg btn-secondary btn-block" type="submit" style="margin-top:20px">
                        Entrar
                    </button>
                    </form>
										<div class="clearfix"></div>
										<div id="status" class=""></div>
										<?php
											session_start();
											if (isset($_SESSION['noLogin']) ){
												echo '<div class="alert alert-danger" role="alert"><strong>Ops Desculpe :(</strong> faça seu login primeiro! </div>';
											}
											session_destroy();
										?>
                </div>
                <a href="singup.php" class="text-center new-account">Criar uma conta!</a>
            </div>
        </div>
    </div>
    <?php include "inc/views/_partials/javascript.php" ?>
		<script src="assets/js/usuarios.js"></script>
  </body>
</html>
