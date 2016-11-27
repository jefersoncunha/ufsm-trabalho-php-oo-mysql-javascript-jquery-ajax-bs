<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Controle de Clientes</title>
  <?php include "inc/views/_partials/head.php" ?>
</head>
<body>


  <div class="container">
      <?php include "inc/views/_partials/menu.php"; ?>
    <div class="panel panel-default">
      <div class="panel-heading">

         <h2 class="panel-title pull-left">
           Cadastrar Clientes
         </h2>
        <a class="btn btn-default pull-right" title="Listar Cliente"
          href="clientes.php" >
          voltar
        </a>

        <div class="clearfix"></div>

      </div>
    <div class="panel-body">

      <form id="client-form" class="client-form">
        <div class="form-group">
          <label for="name" class="control-label">Nome:</label>
          <input type="text" class="form-control" name="nome" id="nome" placeholder="Informe seu Nome" value="">
        </div>
        <div class="form-group">
          <label for="fone" class="control-label">Fone:</label>
          <input type="text" class="form-control" name="fone" id="fone" placeholder="Informe seu Telfone" value="">
        </div>
        <div class="form-group">
          <label for="email" class="control-label">Email:</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Informe seu Email" value="">
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
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/clientes.js"></script>

</body>
</html>
