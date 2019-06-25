<a href="#parallax"><div class="arrowUp" data-toggle="tooltip" data-placement="top" title="Topo"></div></a>
<footer class="container-fluid">
         <div class="col-xs-12 footer-brand">
            <h1 class="text-center">Bragantec</h1>
         </div>

         <div class="col-md-6 border-right">
            <div class="row"> 
               <h1 class="col-xs-12 text-center border-bottom pd">Realizações</h1>
               <div class="col-xs-12 text-center pd">
                  <a href="https://bra.ifsp.edu.br/" target="_blank">
                     <img src="<?php echo get_stylesheet_directory_uri();?>/src/img/logoIfHori.png" alt="Logo do Instituto Federal de Bragança Paulista - SP">
                  </a>
               </div>
               <div class="col-xs-12 border-bottom">
                  <div class="col-xs-6 pd text-center">
                     <div>Fale Conosco:</div>
                     <div>
                        <a href="mailto:bragantec@ifsp.edu.br" target="_blank">
                           <img src="<?php echo get_stylesheet_directory_uri();?>/src/img/email.svg" width="35" alt="clique para nos enviar um email">bragantec@ifsp.com
                        </a>
                     </div>
                  </div>
                  <div class="col-xs-6 pd text-center">
                     <div>Siga-nos:</div>
                     <div>
                        <a href="https://www.facebook.com/bragantec/" target="_blank">
                           <img src="<?php echo get_stylesheet_directory_uri();?>/src/img/face.svg" width="40" alt="clique para entrar em nosso facebook">
                        </a>
                        <a href="https://www.instagram.com/bragantec/?hl=pt-br" target="_blank">
                           <img src="<?php echo get_stylesheet_directory_uri();?>/src/img/insta.svg" width="40" alt="clique para entrar em nosso instagram">
                        </a>
                        <a href="https://www.youtube.com/channel/UC9ZVkgkfnuiXCQc9Sf_lfhQ/featured" target="_blank">
                           <img src="<?php echo get_stylesheet_directory_uri();?>/src/img/yt.svg" width="40" alt="clique para entrar em nosso canal do Youtube">
                        </a>
                     </div>
                  </div>
               </div>
               
               
               <div class="col-xs-12">
                  <a href="http://bra.ifsp.edu.br/ifmeninas/" target="_blank">
                     <img style="text-align:left; margin-top:20px;" align="left" src="<?php echo get_stylesheet_directory_uri();?>/src/img/ifMeninasLogo.png" alt="Logo If meninas nas exatas">
                  </a>
                  <p style="padding-top: 10px;" class="text-center">
                     Esse site foi desenvolvido em parceria com o IF (Meninas){nas exatas}, grupo que apoia meninas nas Exatas. 
                  </p>
               </div>
            </div>
         </div>

         <div class="col-md-6">
            <div class="row"> 
               <h1 class="col-xs-12 text-center border-bottom pd">Apoio</h1>
               <div class="col-xs-12 text-center border-bottom pd">
                  <a href="http://www.cnpq.br/" target="_blank">
                     <img src="<?php echo get_stylesheet_directory_uri();?>/src/img/cnpq.png" alt="Logo do CNPQ">
                  </a>
               </div>
               <div class="col-md-12 border-bottom">
                  <div class="col-xs-6 pd text-center">
                     <a href="https://www.linkedin.com/in/beatriz-miranda-ferreira/" target="_blank">
                        <figure>
                           <img class="img-circle" src="<?php echo get_stylesheet_directory_uri();?>/src/img/beatriz.jpg" alt="Desenvolvedora WEB" width="90">
                           <figcaption><strong>Beatriz Miranda</strong><br>Desenvolvedora WEB</figcaption>
                        </figure>
                     </a>
                  </div>
                  <div class="col-xs-6 pd text-center">
                     <a href="https://www.linkedin.com/in/laura-a-de-almeida-chaile/" target="_blank">
                        <figure>
                           <img class="img-circle" src="<?php echo get_stylesheet_directory_uri();?>/src/img/laura.jpg" alt="Designer" width="90">
                           <figcaption><strong>Laura Chaile</strong><br>Designer</figcaption>
                        </figure>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xs-12 footer-brand"></div>
      </footer>
  


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <!-- Popper.JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  
      <!-- Font Awesome JS -->
      <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" ></script>

      <!-- Fancybox -->
      <script src="<?php echo get_stylesheet_directory_uri();?>/src/fancybox/dist/jquery.fancybox.min.js"></script>


      <script src="<?php echo get_stylesheet_directory_uri();?>/src/js/js.js"></script>
      
      <script type="text/javascript">
         
         //Carrossel 
         var phpRequest = "<?php echo get_stylesheet_directory_uri()?>";
         var imgs = [phpRequest+'/src/img/brag/teste1.jpg', phpRequest+'/src/img/brag/teste2.jpg', phpRequest+'/src/img/brag/teste3.jpg'];
         var imgsAnt = [phpRequest+'/src/img/ant/teste1.jpg', phpRequest+'/src/img/ant/teste2.jpg', phpRequest+'/src/img/ant/teste3.jpg'];
         var i=1;
         
         $('.posicao').attr('src', imgs[i-1]);
         $('.posicao2').attr('src', imgs[1]);
         $('.posicao3').attr('src', imgs[2]);

         $('.mudaImg').click(function(){

            $('.posicao3').attr('src', $('.posicao2').attr('src'));
            $('.posicao2').attr('src', $('.posicao').attr('src'));
            $('.posicao').attr('src', imgs[i]);
            if(i==imgs.length-1){
                  i=0;
            }else{
                  i++;
            }
         });
         $('.carroselImage img').click(function(){
            $('.mudaImg').click();
         });


         $('.posicaoAnt').attr('src', imgsAnt[i-1]);
         $('.posicaoAnt2').attr('src', imgsAnt[1]);
         $('.posicaoAnt3').attr('src', imgsAnt[2]);

         $('.mudaImgAnt').click(function(){

            $('.posicaoAnt3').attr('src', $('.posicaoAnt2').attr('src'));
            $('.posicaoAnt2').attr('src', $('.posicaoAnt').attr('src'));
            $('.posicaoAnt').attr('src', imgsAnt[i]);
            if(i==imgsAnt.length-1){
                  i=0;
            }else{
                  i++;
            }
         });
         $('.carroselImage img').click(function(){
            $('.mudaImgAnt').click();
         });
      </script>

   </body>
</html>