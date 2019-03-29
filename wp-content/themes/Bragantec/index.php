<?php get_header();  global $modal; ?>

<section class="container">
  <div class="row">
    <div class="col-md-6 atualizacoes">
      <h1>Receber atualizações: </h1>
      <form id="formulario" action="" method="post">
        <div class="form-group">
          <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required">
        </div>
        <button id="botaoFormulario" type="submit"  name="cadastro" class="btn btn-primary botao">Me Notifique</button>
      </form>
    </div>
    <div class="col-md-6" >
      <img id="imgConstrucao" src="<?php echo get_stylesheet_directory_uri();?>/img/siteConstrucao.png" alt="Site em Construção">
    </div>
  </div>
</section>




<?php get_footer(); ?>
