<div class="modal fade" id="clienteModal" tabindex="-1" role="dialog" aria-labelledby="clienteModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="clienteModalLabel">Cadastrar Clientes</h4>
      </div>
      <div class="modal-body">
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
        <div id="status" class=""></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
