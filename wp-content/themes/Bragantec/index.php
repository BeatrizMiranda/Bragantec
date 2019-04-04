<?php get_header();?>

<section class="container"  id="email">

    <div class="row atualizacoes text-center">

      <h2 class="text-left col-md-12 text-center">
        Deseja receber atualizações? <br> Insira seu email:
      </h2>

      <form id="formulario" action="" method="post" class="col-md-12 row">
        <div class="form-group col-md-6 offset-md-2 col-xs-12 divInput">
          <input type="email" class="form-control inputEmail" name="email" id="email" placeholder="Email" required="required">
        </div>
        <div class="col-md-2 col-xs-12 botaoSubmit">
          <button id="botaoFormulario" type="submit"  name="cadastro" class="btn btn-primary botao ">Me Notifique</button>
        </div>
      </form>
    </div>

</section>

<?php get_footer();?>
