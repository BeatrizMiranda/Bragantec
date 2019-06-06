<?php
  function registrarCadastro(){
    $email = $_POST['email'];
    $nomeTabela = 'wp_cadastro';

    global $wpdb;
    $wpdb->insert($nomeTabela, array(
      'email' => $email
    ));
  }
  if(isset($_POST['cadastro'])){
    registrarCadastro();
  }
  add_theme_support( 'post-thumbnails' ); 
?>
