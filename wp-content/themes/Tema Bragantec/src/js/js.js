$(document).ready(function(){
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var id = $(this).attr('href'),
                targetOffset = $(id).offset().top;
                
        $('html, body').animate({ 
            scrollTop: targetOffset - 100
        }, 100);
    });

    $('body.galeria .navbar li:nth-of-type(7) a').css('backgroundColor','#e7e7e7');

    $('.chegarDiv').last().height($('.chegarDiv').first().height());

    $('#formulario').submit(function(){
        alert("Email enviado com sucesso, em breve receberá noticias da gente :D");
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    

    if($('#divseta').length){
        var altura = $("#comoparticipar").height();
        $('#divseta').css('height', altura);
    }

    if($('.gallery').length){
        $('.nav.navbar-nav li:last-child').css('backgroundColor', '#e7e7e7');
    }

    // Galeria
    $(function() {
        var selectedClass = "";
        $(".filter").click(function(){
           selectedClass = $(this).attr("data-rel");
           $("#gallery").fadeTo(100, 0.1);
           $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
           setTimeout(function() {
              $("."+selectedClass).fadeIn().addClass('animation');
              $("#gallery").fadeTo(300, 1);
           }, 300);
        });
    });

    
});
