$(document).ready(function () {

  $('.menuPrincipal a[href^="#"]').on('click', function(e) {
    // prevenir que o link funcione da forma padrão que no caso seria "pulando" para o elemento com o id
    e.preventDefault();
    //variável id com o valor refentente ao link clicado
    var id = $(this).attr('href'), targetOffset = $(id).offset().top;
    $('html, body').animate({
        scrollTop: targetOffset - 110
    }, 500);
  });

  $('#formulario').submit(function(){
    alert("Email enviado com sucesso, em breve receberá noticias da gente :D");
  });

  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  });

});
