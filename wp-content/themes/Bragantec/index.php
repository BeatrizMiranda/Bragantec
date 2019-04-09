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
        <?php
          $args = array(
            'category_name' => 'queBragantec',
          );

          $custom_query = new WP_Query( $args );

          if (have_posts()):
            while ($custom_query->have_posts()): $custom_query->the_post();
        ?>
        <p class="text-justify">
            <?php the_excerpt();?>
        </p>
      </div>
      <div class="col-md-6 text-center">
        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_post_thumbnail_caption()?>"/>
        <!-- <img src="<?php echo get_stylesheet_directory_uri()?>/img/teste.jpg" alt="imagem representando a bragantec" width="300"> -->
      </div>
      <?php endwhile; endif ?>
    </div>
</section>
<section class="container" id="comoapoiar">
    <div class="row">
      <div class="col-md-6 text-left">
        <h1>Como Apoiar?</h1>
        <br>
        <?php
          $args = array(
            'category_name' => 'apoio',
          );

          $custom_query = new WP_Query( $args );

          if (have_posts()):
            while ($custom_query->have_posts()): $custom_query->the_post();
        ?>
        <p class="text-justify">
            <?php the_excerpt();?>
        </p>
      </div>
      <div class="col-md-6 text-center">
        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_post_thumbnail_caption()?>"/>
        <!-- <img src="<?php echo get_stylesheet_directory_uri()?>/img/teste.jpg" alt="imagem representando a bragantec" width="300"> -->
      </div>
      <?php endwhile; endif ?>
    </div>
</section>

<?php get_footer();?>
