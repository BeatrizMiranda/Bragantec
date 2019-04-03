<!DOCTYPE html>
<html lang="pt-br">
	<head>
	  <title>Bragantec</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content ="">
		<meta name="keywords" content="">


    <!-- favicon na aba do navegador -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/img/logo_planta.ico">

    <!-- para deixar a aba no  mobile colorida -->
  	<meta name="theme-color" content="#7ca7db">
  	<meta name="apple-mobile-web-app-status-bar-style" content="#7ca7db">
  	<meta name="msapplication-navbutton-color" content="#7ca7db">

    <!--Bootstrap-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!--Css-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css" type="text/css" />

  </head>

  <body>


		<nav class="navbar navbar-expand-lg navbar-light bg-light menuPrincipal">
		  <a class="navbar-brand" href="<?php echo get_site_url();?>">
				<img src="<?php echo get_stylesheet_directory_uri()?>/img/icone2_site.jpg" width="30" alt="icone bragantec">
				Bragantec
			</a>

		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

			<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		        <a class="nav-link" href="<?php echo get_site_url();?>">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Em breve mais informações">
		         <a class="nav-link disabled" href="#">Como Participar</a>
		      </li>
		    </ul>
		  </div>
		</nav>

		<header class="container-fluid">
			<div class="row">
				<div class="float-left offset-md-2 col-md-5 info">
					<span class="titulo">IX Bragantec</span><br>
					<br>
					<span class="subtitulo">FEIRA DE CIÊNCIA E TECNOLOGIA DP IFSP 2019</span>
					<br>
				</div>
				<div class="float-right setaLaranja col-md-3 col-xs-3 ">
					Podem participar alunos do 8° e 9° ano e alunos do médio/técnico
					até 21 anos!
				</div>
			</div>
			<br>
			<div class="row">
				<div class="float-right setaVermelha col-md-3 col-sx-3">
					Inscrições <span  style="font-family: myriadBold">ABERTAS e GRATUITAS!</span> de 01/06 a 02/08
				</div>
			</div>
		</header>
		<div class="col-md-12 text-center subtituloDia">
			Salve a data: 19, 20, 21 de Setembro!
		</div>
