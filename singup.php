<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Controle de Clientes</title>
  <?php include "inc/views/_partials/head.php" ?>
</head>
<body>

  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
         <h2 class="panel-title pull-left">
           Cadastrar Usuarios
         </h2>
         <a class="btn btn-default pull-right" title="Fazer Login"
           href="index.php" style="margin-top:27px; margin-left:5px; margin-right:5px">
           Fazer login
         </a>
        <div class="clearfix"></div>
      </div>

    <div class="panel-body">

      <form id="user-form" class="user-form">
        <div class="form-group">
          <label for="name" class="control-label">Nome:</label>
          <input type="text" class="form-control" name="nome" id="nome" placeholder="Informe seu Nome">
        </div>
        <div class="form-group">
          <label for="senha" class="control-label">Senha:</label>
          <input type="password" class="form-control" name="senha" id="senha" placeholder="Informe sua Senha">
          <input type="hidden" name="op" value="incluir"/>
        </div>
        <button type="submit" class="btn btn-primary">Enviar!</button>
      </form>
      <div class="clearfix"></div>
      <div id="status" class=""></div>

    </div>
  </div>

  <?php include "inc/views/_partials/rodape.php"; ?>

<!-- END CONTAINER -->

<?php include "inc/views/_partials/javascript.php"; ?>
<script src="assets/js/usuarios.js"></script>

</body>
</html>
