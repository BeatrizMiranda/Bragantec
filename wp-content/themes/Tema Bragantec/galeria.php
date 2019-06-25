<?php /* Template Name: galeria */ ?>
    <?php get_header() ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" ></script>

    <script src="<?php echo get_stylesheet_directory_uri();?>/src/js/js.js"></script>

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
            <img src="<?php echo get_stylesheet_directory_uri();?>/src/img/brag/<?php echo $img; ?>" alt="<?php echo $img; ?>">
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
            <img src="<?php echo get_stylesheet_directory_uri();?>/src/img/ant/<?php echo $imgA; ?>" alt="<?php echo $imgA;?>">
          </div>
        <?php }  ?>

      </div>
    <?php get_footer() ?>


<script>
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
</script>