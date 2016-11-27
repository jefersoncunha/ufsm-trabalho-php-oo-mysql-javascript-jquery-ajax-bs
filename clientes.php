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
        Listar Clientes
      </h2>

      <a id="btn-list" class="btn btn-info pull-right" title="Listar Cliente" style="margin-top: 27px; display:none;">
        Voltar Lista
      </a>


      <a class="btn btn-default pull-right" title="Cadastrar Cliente"
        href="clientes-cadastrar.php" style="margin-top:27px; margin-left:5px; margin-right:5px">
        Cadastrar Clientes
      </a>


      <form class="form-inline pull-right">
        <div class="form-group">
          <input type="text" class="form-control" name="pesquisar" id="pesquisar" placeholder="Buscar por..." value="">
        </div>
        <button type="submit" class="btn btn-default" id="buton-pesquisar">Buscar</button>
      </form>

    <div class="clearfix"></div>
  </div>

  <div class="panel-body" id="table-list">

<?php
  include "inc/class/Clientes.class.php";
  $obj = new Clientes;
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
                  Fone
                </span>
              </strong>
            </div>
          </td>
          <td>
            <div>
              <strong>
                <span class="style5">
                  Email
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
          <td><?=$linha['fone'];?></td>
          <td><?=$linha['email'];?></td>
          <td>
            <a class="btn btn-default " title="Alterar"
              href="clientes-editar.php?id=<?=$linha['id'];?>">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
            <a  class="btn btn-default confirm-delete" data-id="<?=$linha['id'];?>">
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

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Clientes</h4>
      </div>
      <div class="modal-body">
        <p>Quer remover este cliente?</p>
      </div>
      <div class="modal-footer">
        <a href="#" id="btnYes" class="btn btn-default">SIM</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
      </div>
    </div>
  </div>


</div>

<?php include "inc/views/_partials/javascript.php"; ?>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/clientes.js"></script>


</body>
</html>
