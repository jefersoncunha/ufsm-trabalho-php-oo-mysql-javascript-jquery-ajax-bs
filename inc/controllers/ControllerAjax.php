<?php
  include '../class/Clientes.class.php';

  $op = $_GET["op"];

  if($op == "show"){

    $obj = new Clientes;
    $resultado = $obj->mostrar();
    echo '<table class="table table-striped table-bordered">
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
        </tr>';
    while($linha=mysqli_fetch_assoc($resultado)){ ?>
      <tr>
        <td><?=$linha['id'];?></td>
        <td><?=$linha['nome'];?></td>
        <td><?=$linha['fone'];?></td>
        <td><?=$linha['email'];?></td>
        <td>
            <a class="btn btn-default" onclick="editar(event);" cliente_id_edit="<?=$linha['id'];?>">
            <span class="glyphicon glyphicon-edit"></span>
          </a>

          <a class="btn btn-default" onclick="deletar(event);" cliente_id="<?=$linha['id'];?>">
            <span class="glyphicon glyphicon-trash"></span>
          </a>
        </td>
      </tr>
    <?php }
    echo '</table>';
  }
  elseif ($op == "excluir"){
		$id = $_GET["id"];
		$obj = new Clientes;
		$obj->excluir($id);
    echo "ok";
	}
  if($op == "buscaCliente"){
      $obj = new Clientes;
      $id = $_GET["id"];
      $resultado = $obj->buscarCliente($id);

      echo '
      <form id="client-form-edit" class="client-form-edit">
        <div class="form-group">
          ';

      while($linha=mysqli_fetch_assoc($resultado)){ ?>
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
        </div>
      <?php }
      echo '
        <button type="submit" class="btn btn-primary">Enviar!</button>
        </form>
      ';
  }
  if($op == "pesquisar"){
      $obj = new Clientes;
      $palavra = $_GET["palavra"];
      $resultado = $obj->pesquisar($palavra);

      echo '<table class="table table-striped table-bordered">
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
          </tr>';
      while($linha=mysqli_fetch_assoc($resultado)){ ?>
        <tr>
          <td><?=$linha['id'];?></td>
          <td><?=$linha['nome'];?></td>
          <td><?=$linha['fone'];?></td>
          <td><?=$linha['email'];?></td>
          <td>
              <a class="btn btn-default" onclick="editar(event);" cliente_id_edit="<?=$linha['id'];?>">
              <span class="glyphicon glyphicon-edit"></span>
            </a>

            <a class="btn btn-default" onclick="deletar(event);" cliente_id="<?=$linha['id'];?>">
              <span class="glyphicon glyphicon-trash"></span>
            </a>
          </td>
        </tr>
      <?php }
      echo '</table>';
  }


?>
