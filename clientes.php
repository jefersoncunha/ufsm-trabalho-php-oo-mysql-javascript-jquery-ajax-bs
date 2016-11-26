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
      <button type="button" class="btn btn-default pull-right"
        data-toggle="modal" data-target="#clienteModal" data-whatever="Cadastrar">
        Cadastrar CLientes
      </button>
    <div class="clearfix"></div>
  </div>
  <div class="panel-body">

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
              href="buscarPagamento?id=${pag.id}">
              <span class="glyphicon glyphicon-edit"></span>
            </a>
            <a class="btn btn-default" title="Deletar"
              href="pagamentoExcluir?id=${pag.id}" >
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
</div>
</div>
<?php include "inc/views/_partials/rodape.php"; ?>
</div> <!-- END CONTAINER -->


<div class="modal fade" id="clienteModal" tabindex="-1" role="dialog" aria-labelledby="clienteModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="clienteModalLabel">Cadastrar Cliente</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="name" class="control-label">Nome:</label>
            <input type="text" class="form-control" id="name" id="name">
          </div>
          <div class="form-group">
            <label for="fone" class="control-label">Fone:</label>
            <input type="text" class="form-control" id="fone" id="fone">
          </div>
          <div class="form-group">
            <label for="email" class="control-label">Email:</label>
            <input type="email" class="form-control" id="email" id="email">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Enviar!</button>
      </div>
    </div>
  </div>
</div>

<?php include "inc/views/_partials/javascript.php"; ?>
<script>
  // $('#clienteModal').on('show.bs.modal', function (event) {
  //   var button = $(event.relatedTarget) // Button that triggered the modal
  //   var recipient = button.data('whatever') // Extract info from data-* attributes
  //   // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  //   // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  //   var modal = $(this)
  //   modal.find('.modal-title').text('New message to ' + recipient)
  //   modal.find('.modal-body input').val(recipient)
  // });
</script>
</body>
</html>
