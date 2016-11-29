<?php include "inc/noLogin.php" ?>
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
           Editar Clientes
         </h2>
        <a class="btn btn-default pull-right" title="Listar Cliente"
          href="clientes.php" >
          voltar
        </a>

        <div class="clearfix"></div>

      </div>
    <div class="panel-body">
      <form id="client-form-edit" class="client-form-edit">
        <div class="form-group">

<?php
include 'inc/class/Clientes.class.php';
$obj = new Clientes;
$id = $_GET["id"];
$resultado = $obj->buscarCliente($id);
while($linha=mysqli_fetch_assoc($resultado)){
?>
        <div class="form-group">
          <label for="name" class="control-label">Nome:</label>
          <input type="text" class="form-control" name="nome" id="nome" placeholder="Informe seu Nome" value="<?=$linha['nome'];?>">
        </div>
        <div class="form-group">
          <label for="fone" class="control-label">Fone:</label>
          <input type="text" class="form-control" name="fone" id="fone" placeholder="Informe seu Telfone" value="<?=$linha['fone'];?>">
        </div>
        <div class="form-group">
          <label for="email" class="control-label">Email:</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Informe seu Email" value="<?=$linha['email'];?>">
          <input type="hidden" name="op" value="editar"/>
          <input type="hidden" name="id" value="<?=$linha['id'];?>"/>
        </div>
<?php } ?>

        <button type="submit" class="btn btn-primary">Enviar!</button>
      </form>
      </div>
      <div class="clearfix"></div>
      <div id="status_edit" class=""></div>

    </div>
  </div>

  <?php include "inc/views/_partials/rodape.php"; ?>

  <!-- END CONTAINER -->

  <?php include "inc/views/_partials/javascript.php"; ?>
  <script src="assets/js/jquery-mask.js"></script>
  <script src="assets/js/clientes.js"></script>
  <script>
    $(document).ready(function () {
      $('#fone').mask('(00) 00000-0000');
    });
  </script>

  </body>
</html>
