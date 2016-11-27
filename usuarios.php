<?php include "inc/noLogin.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Controle de Clientes</title>
  <?php include "inc/views/_partials/head.php" ?>
</head>

<div class="container">
  <?php include "inc/views/_partials/menu.php"; ?>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h2 class="panel-title pull-left">
        Listar Usuarios
      </h2>

    <div class="clearfix"></div>
  </div>

  <div class="panel-body" id="table-list">

<?php
  include "inc/class/Usuarios.class.php";
  $obj = new Usuarios;
  $resultado = $obj->mostrar();
  if($resultado){
?>
    <table class="table table-striped table-bordered">
        <tr>
          <td>
            <div>
              <strong>
                <span class="style5">
                  ID
                </span>
              </strong>
            </div>
          </td>
          <td>
            <div>
              <strong>
                <span class="style5">
                  Nome
                </span>
              </strong>
            </div>
          </td>
          <td>
            <div>
              <strong>
                <span class="style5">
                  Senha
                </span>
              </strong>
            </div>
          </td>

          <td>
            <div>
              <strong>
                <span class="style5">
                  AÇÕES
                </span>
              </strong>
            </div>
          </td>
        </tr>
      <?php while($linha=mysqli_fetch_assoc($resultado)){ ?>
        <tr>
          <td><?=$linha['id'];?></td>
          <td><?=$linha['nome'];?></td>
          <td><?=$linha['senha'];?></td>
          <td>
            <a class="btn btn-default " title="Alterar" href="#">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
            <a  href="#" class="btn btn-default">
              <span class="glyphicon glyphicon-trash"></span>
            </a>
          </td>
        </tr>
      <?php } // Close While ?>
    </table>
<?php
  }else{
    echo "<h2>:( Ainda não temos nenhum cliente cadastrado</h2>";
  }
?>
<div id="status_delete"></div>
</div>
<div class="panel-body" id="table-search">
</div>

</div>
<?php include "inc/views/_partials/rodape.php"; ?>

</div>
<!-- END CONTAINER -->



<?php include "inc/views/_partials/javascript.php"; ?>
<script src="assets/js/clientes.js"></script>


</body>
</html>
