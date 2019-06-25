<?php /* Template Name: galeria */ ?>
    <?php get_header() ?>

    <div class="row">

        <!-- Grid column -->
        <div class="col-md-12 opcoes">

          <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">All</button>
          <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">Bragantequinha</button>
          <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">Edições Anteriores</button>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="gallery" id="gallery">

        <?php
          define('imgBrag', get_theme_root() . '/Tema Bragantec/src/img/brag/');

          $images = glob(imgBrag . '{*.jpg, *.png}', GLOB_BRACE);

          foreach ($images as $img){

            $img = explode('/', $img);

            $img = $img[count($img)-1];
        ?>
          <div class="pics animation all 1">
            <a data-fancybox="images" href="<?php echo get_stylesheet_directory_uri();?>/src/img/brag/<?php echo $img; ?>">
              <img src="<?php echo get_stylesheet_directory_uri();?>/src/img/brag/<?php echo $img; ?>" alt="<?php echo $img; ?>">
            </a>
          </div>
        <?php }  ?> 

        <?php
          define('imgAnteriores', get_theme_root() . '/Tema Bragantec/src/img/ant/');

          $imagesAnt = glob(imgAnteriores . '{*.jpg, *.png}', GLOB_BRACE);

          foreach ($imagesAnt as $imgA){

            $imgA = explode('/', $imgA);

            $imgA = $imgA[count($imgA)-1];
        ?>
          <div class="pics animation all 2">
            <a data-fancybox="images" href="<?php echo get_stylesheet_directory_uri();?>/src/img/ant/<?php echo $imgA; ?>">
              <img src="<?php echo get_stylesheet_directory_uri();?>/src/img/ant/<?php echo $imgA; ?>" alt="<?php echo $imgA;?>">
            </a>
          </div>
        <?php }  ?>

      </div>
    <?php get_footer() ?>


