<?php get_header();?>

<section class="container"  id="email">

    <div class="row atualizacoes text-center">

      <h2 class="text-left col-md-12 text-center">
        Deseja receber atualizações? <br> Insira seu e-mail:
      </h2>

      <form id="formulario" action="" method="post" class="col-md-12 row">
        <div class="form-group col-md-6 offset-md-2 col-xs-12 divInput">
          <input type="email" class="form-control inputEmail" name="email" id="email" placeholder="E-mail" required="required">
        </div>
        <div class="col-md-2 col-xs-12 botaoSubmit">
          <button id="botaoFormulario" type="submit"  name="cadastro" class="btn btn-primary botao ">Me Notifique</button>
        </div>
      </form>
    </div>

</section>
<section class="container" id="queBragantec">
    <div class="row">
      <div class="col-md-6 text-left">
        <h1>O que é Bragantec?</h1>
        <br>
        <p class="text-justify">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
      <div class="col-md-6 text-center">
        <img src="<?php echo get_stylesheet_directory_uri()?>/img/teste.jpg" alt="imagem representando a bragantec" width="300">
      </div>

    </div>
</section>

<?php get_footer();?>
