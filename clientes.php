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
        Listar Clientes
      </h2>
      <button type="button" class="btn btn-default pull-right"
        data-toggle="modal" data-target="#clienteModal" data-whatever="Cadastrar">
        Cadastrar Clientes
      </button>
    <div class="clearfix"></div>
  </div>
  <div class="panel-body">

    <?php
      include "inc/class/Clientes.class.php";
      $obj = new Clientes;
      $resultado = $obj->mostrar();
      if($resultado){
        echo '<div id="clientesAjax"></div>';
      }else{
        echo "<h2>:( Ainda não temos nenhum cliente cadastrado</h2>";
      }
    ?>
  </div>
</div>
<?php include "inc/views/_partials/rodape.php"; ?>


<div id="log_status"></div>


</div> <!-- END CONTAINER -->

  <?php include "inc/views/clientes/modalEdit.php"; ?>
  <?php include "inc/views/clientes/modalDelete.php"; ?>
  <?php include "inc/views/clientes/modalInsert.php"; ?>

  </div>
  <?php include "inc/views/_partials/javascript.php"; ?>
  <script src="assets/js/jquery.validate.min.js"></script>
  <script src="assets/js/clientes.js"></script>

  </body>
</html>
