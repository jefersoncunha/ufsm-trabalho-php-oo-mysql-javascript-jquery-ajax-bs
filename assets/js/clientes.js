$(".client-form").submit(function(event) {
  event.preventDefault();
  var status = $('#status');
  $.post("inc/controllers/controller.php",$(this).serialize(),
    function(resposta){
      console.log(resposta);

      if(resposta == "ok"){
        status.slideDown();
        status.removeClass('alert alert-danger');
        status.addClass('alert alert-success');
        status.html('<strong> Cadastrado com sucesso </strong>');
        CarregarClientes();
      }
      else{
        status.slideDown();
        status.removeClass('alert alert-success');
        status.addClass('alert alert-danger');
        status.html('<strong> :( Desculpe, tente novamente. </strong>');
      }
      setTimeout(function(){
        status.hide();
      },5000);
      setTimeout(function(){
        $('#clienteModal').modal('hide');
      },7000);
    }
  );
});

$(".client-form-edit").submit(function(event) {
  event.preventDefault();

  var status = $('#status_edit');

  $.post("inc/controllers/controller.php",$(this).serialize(),
    function(resposta){
      console.log(resposta);

      $('#clienteModalEdit').html(resposta);

      if(resposta == "ok"){
        status.slideDown();
        status.removeClass('alert alert-danger');
        status.addClass('alert alert-success');
        status.html('<strong> Cliente Editado com sucesso </strong>');
        CarregarClientes();
      }
      else{
        status.slideDown();
        status.removeClass('alert alert-success');
        status.addClass('alert alert-danger');
        status.html('<strong> :( Desculpe, tente novamente. </strong>');
      }
      setTimeout(function(){
        status.hide();
      },5000);
      setTimeout(function(){
        $('#clienteModalEdit').modal('hide');
      },7000);
    }
  );
});

function CarregarClientes(){
    jQuery.get( 'inc/controllers/ControllerAjax.php?op=show',
    function( data ) {
       jQuery( "#clientesAjax" ).html( data );
    });
}
jQuery(document).ready(function ($) {
  CarregarClientes();
});


function deletar(event){
  var element = event.target;
  var cliente_id = element.getAttribute("cliente_id");
  $('#deleteModal').modal('show');
  $('#deleteModal').find('.modal-body').data( "data-client-id", cliente_id );
  $('#deleteModal').find('.modal-title').text('Apagar Cliente ' + cliente_id)
  console.log("confirm hike_id "+cliente_id);
}

$('#ConfirmDelete').click(function() {
    var id = $('.modal-body').data('data-client-id');
    $.get('inc/controllers/ControllerAjax.php?op=excluir&id='+id,
    function( data ) {
      $('#status-excluir').slideDown();
      $('#status-excluir').addClass('alert alert-success');
      $('#status-excluir').html('<strong> Cliente'+id+' Excluido </strong>');
       CarregarClientes();
    });
    setTimeout(function(){
      $('#status-excluir').slideDown();
    },4000);
    setTimeout(function(){
      $('#deleteModal').modal('hide');
    },5000);
});

function editar(event){
  var element = event.target;
  var cliente_id_edit = element.getAttribute("cliente_id_edit");

  console.log("cliente_id_edit => "+cliente_id_edit)

  $.get('inc/controllers/ControllerAjax.php?op=buscaCliente&id='+cliente_id_edit,

  function( data ) {
     $('#form_edit').html(data);
     $('#clienteModalEdit').modal('show');
  });


  // $('#deleteModal').modal('show');
  // $('#deleteModal').find('.modal-body').data( "data-client-id", cliente_id );
  // $('#deleteModal').find('.modal-title').text('Apagar Cliente ' + cliente_id)
  // console.log("confirm hike_id "+cliente_id);
}
