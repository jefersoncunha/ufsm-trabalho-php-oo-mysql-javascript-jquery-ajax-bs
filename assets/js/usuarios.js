$(".login-form").submit(function(event) {
  event.preventDefault();
  var status = $('#status');

  $.post("inc/controllers/controller-usuarios.php",$(this).serialize(),
    function(resposta){
      if(resposta){
        status.slideDown();

        if(resposta == "ok"){
          status.removeClass('alert alert-danger');
          status.addClass('alert alert-success');
          status.html('<strong> Login com sucesso...</strong>');
          setTimeout(function(){
            window.location.href = 'home.php';
          },1000);
        }
        else if(resposta == "erro"){
          status.removeClass('alert alert-success');
          status.addClass('alert alert-danger');
          status.html('<strong>  Login Errado :( </strong> </br> confira suas informações de login');
        }
        else{
          status.removeClass('alert alert-success');
          status.addClass('alert alert-danger');
          status.html(resposta);
        }
      }
    });
});

$(".user-form").submit(function(event) {
  event.preventDefault();
  var status = $('#status');
  $.post("inc/controllers/controller-usuarios.php",$(this).serialize(),
    function(resposta){
      if(resposta == "ok"){
        status.slideDown();
        status.removeClass('alert alert-danger');
        status.addClass('alert alert-success');
        status.html('<strong> Cadastrado com sucesso!</strong>');
      }
      else{
        status.slideDown();
        status.removeClass('alert alert-success');
        status.addClass('alert alert-danger');
        status.html('<strong> :( Desculpe, tente novamente! </strong>');
      }
      setTimeout(function(){  status.hide(); },5000);
    });
});
