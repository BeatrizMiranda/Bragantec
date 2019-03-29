<?php get_header();?>

<section class="container">
  <div class="row">
    <div class="col-md-6 col-xs-12 atualizacoes">
      <h2>
        <img width="20" src="<?php echo get_stylesheet_directory_uri();?>/img/seta.png" alt="">
        Receber atualizações:
      </h2>

      <form id="formulario" action="" method="post">
        <div class="form-group">
          <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required">
        </div>
        <button id="botaoFormulario" type="submit"  name="cadastro" class="btn btn-primary botao">Me Notifique</button>
      </form>
    </div>
    <div class="col-md-6 col-xs-12">
      <img id="imgConstrucao" src="<?php echo get_stylesheet_directory_uri();?>/img/siteConstrucao.png" alt="Site em Construção">
    </div>
  </div>
</section>





<?php get_footer(); ?>
