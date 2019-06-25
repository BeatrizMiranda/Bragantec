<!DOCTYPE html>
<html>
   <head>
      <title>Bragantec</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content ="">
	  <meta name="keywords" content="">


      <!-- favicon na aba do navegador -->
      <!-- <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/img/"> -->

      <!-- Aba no  mobile colorida -->
      <meta name="theme-color" content="rgb(197,26,27)">
      <meta name="apple-mobile-web-app-status-bar-style" content="rgb(197,26,27)">
      <meta name="msapplication-navbutton-color" content="rgb(197,26,27)">
      
      <!-- Links -->
      <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/src/font/font.css">
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/src/styles/style.css">

      <!-- Fancybox -->
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/src/fancybox/dist/jquery.fancybox.min.css">

   </head>
   <body data-spy="scroll" data-target=".navbar" data-offset="80">

      <nav class="navbar navbar-default navbar-fixed-top container-fluid">
         <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>                        
               </button>
               <a class="nav-link" href="<?php echo get_site_url();?>">Bragantec <span class="sr-only">(current)</span></a>

               <!-- <a class="navbar-brand" href="#"></a> -->
            </div>
            <div>
               <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav">
                     <li><a href="<?php echo is_home() ?  "#oquebrag" :  get_home_url()."#oquebrag";?>">O que é Bragantec</a></li>
                     <li><a href="<?php echo is_home() ? "#participar" : get_home_url()."#participar";?>">Como Participar</a></li>
                     <li><a href="<?php echo is_home() ? "#comoChegar" : get_home_url()."#comoChegar";?>">Como Chegar</a></li>
                     <li><a href="<?php echo is_home() ? "#bragantequinha" : get_home_url()."#bragantequinha";?>">Bragantequinha</a></li>
                     <li><a href="<?php echo is_home() ? "#anteriores" : get_home_url()."#anteriores";?>">Edições Anteriores</a></li>
                     <li><a href="<?php echo is_home() ? "#apoio" : get_home_url()."#apoio";?>">Como Apoiar</a></li>
                     <li><a href="<?php echo get_site_url();?>/galeria">Galeria</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </nav>

      <header id="parallax" class="container-fluid parallax">
         <div class="setaLaranja">
            <span>Podem participar alunos do 8° e 9° ano <br> e alunos do médio/técnico
            até 21 anos!</span>
         </div>
         <div class="setaVermelha">
            <span>Inscrições <strong>GRATUITAS</strong><br> de 01/06 a 02/08</span>
         </div>
      </header>
      <div class="container text-center subtituloDia">
         <h2>Reserve esta data: 19 a 21 de Setembro de 2019!</h2>
      </div>
      <div class="text-center desktop-hide">
			<a href="#oquebrag">
				<div>
						<img class="setaMais" src="<?php echo get_stylesheet_directory_uri();?>/src/img/seta.png" alt="veja mais" width="30" height="40">
				</div>
			</a>
      </div>
      