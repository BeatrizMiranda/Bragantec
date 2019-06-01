$(document).ready(function(){
    $('.nav a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var id = $(this).attr('href'),
                targetOffset = $(id).offset().top;
                
        $('html, body').animate({ 
            scrollTop: targetOffset - 100
        }, 100);
    });
    
    $('#formulario').submit(function(){
        alert("Email enviado com sucesso, em breve receberá noticias da gente :D");
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    var altura = $("#comoparticipar").height();

    $('#divseta').css('height', altura);

});
