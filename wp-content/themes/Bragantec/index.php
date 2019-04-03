<?php get_header();?>

<section class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2 col-xs-12 atualizacoes text-center">

      <h2  class="text-left">
        Deseja receber atualizações? Insira seu email:
      </h2>

      <form id="formulario" action="" method="post">
        <div class="form-group">
          <input type="email" class="form-control inputEmail" name="email" id="email" placeholder="Email" required="required">
        </div>
        <button id="botaoFormulario" type="submit"  name="cadastro" class="btn btn-primary botao">Me Notifique</button>
      </form>
    </div>
  </div>
</section>





<?php get_footer(); ?>
