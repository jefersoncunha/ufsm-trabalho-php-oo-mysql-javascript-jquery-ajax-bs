$(".client-form").submit(function(event) {
  event.preventDefault();
  var status = $('#status');
  $.post("inc/controllers/controller.php",$(this).serialize(),
    function(resposta){
      if(resposta == "ok"){
        status.slideDown();
        status.removeClass('alert alert-danger');
        status.addClass('alert alert-success');
        status.html('<strong> Cadastrado com sucesso </strong>');
      }
      else{
        status.slideDown();
        status.removeClass('alert alert-success');
        status.addClass('alert alert-danger');
        status.html('<strong> :( Desculpe, tente novamente. </strong>');
      }

      setTimeout(function(){  status.hide(); },5000);
    }
  );
});

$(".client-form-edit").submit(function(event) {
  event.preventDefault();

  var status = $('#status_edit');

  $.post("inc/controllers/controller.php",$(this).serialize(),
    function(resposta){

      if(resposta == "ok"){
        status.slideDown();
        status.removeClass('alert alert-danger');
        status.addClass('alert alert-success');
        status.html('<strong> Cliente Editado com sucesso </strong>');
      }
      else{
        status.slideDown();
        status.removeClass('alert alert-success');
        status.addClass('alert alert-danger');
        status.html('<strong> :( Desculpe, tente novamente. </strong>');
      }
      // status.html(resposta);
      setTimeout(function(){  status.hide(); },5000);

    }
  );
});


$('#deleteModal').on('show', function() {
    var id = $(this).data('id'),
    removeBtn = $(this).find('.danger');
    console.log("deleteModal"+id);
});

$('.confirm-delete').on('click', function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    $('#deleteModal').data('id', id).modal('show');
    console.log("confirm"+id);
});

$('#btnYes').click(function() {

    var id = $('#deleteModal').data('id');
    var status = $('#status_delete');
    $('#deleteModal').modal('hide');
    $.get('inc/controllers/ControllerAjax.php?op=excluir&id='+id,
      function(data) {

       if(data == "ok"){
         status.slideDown();
         status.removeClass('alert alert-danger');
         status.addClass('alert alert-success');
         status.html('<strong> Cliente Excluido '+id+' com sucesso </strong>');

          setTimeout(function(){  location.reload(); },3000);
       }
       else{
         status.slideDown();
         status.removeClass('alert alert-success');
         status.addClass('alert alert-danger');
         status.html('<strong> :( Desculpe, tente novamente. </strong>');
       }

    });
});
