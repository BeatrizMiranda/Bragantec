<?php /* Template Name: galeria */ ?>
<!DOCTYPE html>
<html>
	<head>
	  <title>Galeria</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
    <!-- Aba no  mobile colorida -->
      <meta name="theme-color" content="rgb(197,26,27)">
      <meta name="apple-mobile-web-app-status-bar-style" content="rgb(197,26,27)">
      <meta name="msapplication-navbutton-color" content="rgb(197,26,27)">
      
      <!-- Links -->
      <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/src/font/font.css">
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/src/styles/style.css">


  </head>

  <body class="galeria">
    
    <?php get_header() ?>
    <h1 class="col-xs-12 text-center">Galeria de fotos</h1>
    <?php echo do_shortcode('[gdgallery_gallery id_gallery=2 ]'); ?> 

    <?php get_footer() ?>
  </body>
</html>
