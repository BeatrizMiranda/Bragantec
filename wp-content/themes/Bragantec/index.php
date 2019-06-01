<?php get_header() ?>

<section class="container"  id="emailSection">

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


<main class="container">
    <article id="oquebrag" class="container-fluid">
        <div class="row conteudo">
            <div class="col-md-6">
                <?php
                    $args = array(
                        'category_name' => 'queBragantec',
                    );

                    $custom_query = new WP_Query( $args );

                    if (have_posts()):
                        while ($custom_query->have_posts()): $custom_query->the_post();
                ?>
                <h1><?php the_title() ?></h1>
                <div class="text">
                    <?php the_content();?>
                </div>
                
            </div>
            <div class="col-md-6 text-center">
                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_post_thumbnail_caption()?>"/>
                <!-- <img src="<?php echo get_stylesheet_directory_uri();?>/src/img/teste.jpg" alt="imagens para representar a bragantec, pessoas apresentando."> -->
            </div>
            <?php endwhile; endif ?>
        </div>
    </article>
    <section>
        <span class="sr-only">Sessão de Como Participar</span>
        <article id="participar" class="container-fluid conteudo">
            <div class="row">
                <div id="comoparticipar" class="col-md-6 col-xs-12">
                    <?php
                        $args = array(
                            'category_name' => 'participar',
                        );

                        $custom_query = new WP_Query( $args );

                        if (have_posts()):
                            while ($custom_query->have_posts()): $custom_query->the_post();
                    ?>
                    <h1><?php the_title() ?></h1>
                    <div class="text text-justify">
                        <?php the_content();?>
                    </div>
                </div>
                <div id="divseta" class="col-md-1 seta mobile-hide tabletHide">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/src/img/seta.png" width="60" style="top: 40%; position: relative;">
                </div>
                <div id="indicesParticipar" class="col-md-5 text-center col-xs-12">
                    <div class="displayFlex">
                        <h2>Etapas do projeto</h2>
                        <h3>Clique nos titulos para ter mais detalhes sobre eles!</h3>
                        <div>
                            <a href="#inscricao">
                                <div class="divBolinha"><div class="bolinha i"></div></div>
                                <h2>Inscrição</h2>
                            </a>
                            <p>Você deve inscrever seu projeto na feira</p>
                        </div>
                        

                        <div>
                            <a href="#desenvolvimento">
                            <div class="divBolinha"><div class="bolinha d"></div></div>
                            <h2>Desenvolvimento</h2></a>
                            <p>Voce deve desenvolver sua tese</p>
                        </div>
                        
                        <div>
                            <a href="#apresentacao">
                            <div class="divBolinha"><div class="bolinha a"></div></div>
                            <h2>Apresentação</h2></a>
                            <p>E então apresentar seu projeto na feira</p>
                        </div>
                        <div id="bolinhaRegra">
                            <a href="#regras">
                            <div class="divBolinha"><div class="bolinha" style="padding-top: 5px;"></div></div>
                            <h2>Regras e datas importantes</h2></a>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif ?>
            </div>
        </article>

        <article>
            <article id="inscricao">
                <div  class="container-fluid conteudo row">
                    <div class="col-md-6">
                        <div style="float:left" class="divBolinha"><div class="bolinha i"></div></div>
                    <?php
                            $args = array(
                                'category_name' => 'inscricao',
                            );

                            $custom_query = new WP_Query( $args );

                            if (have_posts()):
                                while ($custom_query->have_posts()): $custom_query->the_post();
                        ?>
                        <h1 style="float:left"><?php the_title() ?></h1>
                        <img src="<?php echo get_stylesheet_directory_uri();?>/src/img/seta.png" class="setaPart" width="30">
                        <br>
    
                        <br>
                        <div class="text">
                            <?php the_content()?>
                        </div>
                        <?php endwhile; endif;?>
                    </div>

                    <div class="col-md-6 displayFlex">
                        
                        <?php
                            $args = array(
                                'category_name' => 'planopesquisa',
                            );

                            $custom_query = new WP_Query( $args );

                            if (have_posts()):
                                while ($custom_query->have_posts()): $custom_query->the_post();
                        ?>
                        <h2 style="float:left"><?php the_title()?></h2>
                        <div class="text">
                            <?php the_content()?>
                        </div>
                        <?php endwhile; endif;?>
                        <div class="flex">
                            <a href="#" class="col-md-6 links">Exemplo de plano de pesquisa </a>
                            <a href="#" class="col-md-6 links">Template de plano de pesquisa</a>
                        </div>
                        <?php
                            $args = array(
                                'category_name' => 'video',
                            );

                            $custom_query = new WP_Query( $args );

                            if (have_posts()):
                                while ($custom_query->have_posts()): $custom_query->the_post();
                        ?>
                        <h2 style="float:left"><?php the_title()?></h2>
                        <div class="text">
                            <?php the_content()?>
                        </div>
                        <?php endwhile; endif;?>

                    </div>
                </div>
            </article>
            <article id="desenvolvimento">
                <div  class="container-fluid conteudo row">
                    <div class="col-md-6 partConteudo">
                        <div style="float:left" class="divBolinha"><div class="bolinha d"></div></div>

                        <?php
                            $args = array(
                                'category_name' => 'desenvolvimento',
                            );

                            $custom_query = new WP_Query( $args );

                            if (have_posts()):
                                while ($custom_query->have_posts()): $custom_query->the_post();
                        ?>
                        <h1 style="float:left"><?php the_title() ?></h1>
                        <img src="<?php echo get_stylesheet_directory_uri();?>/src/img/seta.png" class="setaPart" width="30">
                        <br>
                        <br>
                        <div class="text">
                            <?php the_content()?>
                        </div>
                        <?php endwhile; endif;?>
                    </div>
                    <div class="col-md-6 displayFlex">
                        <?php
                            $args = array(
                                'category_name' => 'diariobordo',
                            );

                            $custom_query = new WP_Query( $args );

                            if (have_posts()):
                                while ($custom_query->have_posts()): $custom_query->the_post();
                        ?>
                        <h2 style="float:left"><?php the_title()?></h2>
                        <div class="text">
                            <?php the_content()?>
                        </div>
                        <?php endwhile; endif;?>
                        <div class="flex" style="text-align:center">
                            <a href="#" class="col-md-6 links" > Exemplo de Diário de Bordo </a>
                        </div>
                        <?php
                            $args = array(
                                'category_name' => 'relatorio',
                            );

                            $custom_query = new WP_Query( $args );

                            if (have_posts()):
                                while ($custom_query->have_posts()): $custom_query->the_post();
                        ?>
                        <h2 style="float:left"><?php the_title()?></h2>
                        <div class="text">
                            <?php the_content()?>
                        </div>
                        <?php endwhile; endif;?>
                        <div class="flex" style="text-align:center">
                            <a href="#" class="col-md-6 links" > Template do Relatório </a>
                        </div>
                    </div>  
                </div>
            </article>
            <article id="apresentacao" >
                <div class="container-fluid conteudo row">
                <h1>Meu projeto foi aceito, e agora?</h1>
                    <div class="col-md-6 partConteudo">
                        
                        <div style="float:left" class="divBolinha"><div class="bolinha a"></div></div>
                        <?php
                            $args = array(
                                'category_name' => 'apresentacao',
                            );

                            $custom_query = new WP_Query( $args );

                            if (have_posts()):
                                while ($custom_query->have_posts()): $custom_query->the_post();
                        ?>
                        <h1 style="float:left"><?php the_title() ?></h1>
                        <img src="<?php echo get_stylesheet_directory_uri();?>/src/img/seta.png" class="setaPart" width="30">
                        <br>
    
                        <br>
                        <div class="text text-justify">
                            <?php the_content()?>
                        </div>
                        <?php endwhile; endif;?>
                    </div>
                    <div class="col-md-6 displayFlex">
                    <?php
                            $args = array(
                                'category_name' => 'avaliacao',
                            );

                            $custom_query = new WP_Query( $args );

                            if (have_posts()):
                                while ($custom_query->have_posts()): $custom_query->the_post();
                        ?>
                        <h2 style="float:left"><?php the_title()?></h2>
                        <div class="text">
                            <?php the_content()?>
                        </div>
                        <?php endwhile; endif;?>

                        <?php
                            $args = array(
                                'category_name' => 'preciso',
                            );

                            $custom_query = new WP_Query( $args );

                            if (have_posts()):
                                while ($custom_query->have_posts()): $custom_query->the_post();
                        ?>
                        <h2 style="float:left"><?php the_title()?></h2>
                        <div class="text">
                            <?php the_content()?>
                        </div>
                        <?php endwhile; endif;?>
                    </div>
                </div>
            </article>
        </article>
        <div class="clearfix"></div>
    </section>
    <section id="regras" class="container-fluid">
        <div class="row conteudo">
            <div class="col-md-6">
                <?php
                    $args = array(
                        'category_name' => 'regras',
                    );

                    $custom_query = new WP_Query( $args );

                    if (have_posts()):
                        while ($custom_query->have_posts()): $custom_query->the_post();
                ?>
                <h1><?php the_title() ?></h1>
                <div class="text text-justify" style="margin-bottom: 40px;">
                    <?php the_content()?>
                </div>
                <?php endwhile; endif;?>
            </div>
            <div class="col-md-6 text-center">
                <?php
                    $args = array(
                        'category_name' => 'datas',
                    );

                    $custom_query = new WP_Query( $args );

                    if (have_posts()):
                        while ($custom_query->have_posts()): $custom_query->the_post();
                ?>
                <h1 style="text-align:left;"><?php the_title() ?></h1>
                <div class="text text-justify" style="margin-bottom: 40px;">
                    <?php the_content()?>
                </div>
                <?php endwhile; endif;?>           
            </div>
        </div>
    </section>
    <article id="comoChegar" class="container-fluid">
        <h1>Como Chegar </h1>
        <div class="col-md-6 col-xs-12 chegarDiv">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3674.042287654054!2d-46.560868685602685!3d-22.948669684990517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cec9f08275ff8f%3A0xb22403ac6f421f0c!2sIFSP+-+Campus+Bragan%C3%A7a+Paulista+(novo+pr%C3%A9dio)!5e0!3m2!1spt-BR!2sbr!4v1559392820610!5m2!1spt-BR!2sbr" style="width:400px; height:300px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-md-6 col-xs-12 chegarDiv">
            <?php
                $args = array(
                    'category_name' => 'ajudaIfsp',
                );

                $custom_query = new WP_Query( $args );

                if (have_posts()):
                    while ($custom_query->have_posts()): $custom_query->the_post();
            ?>
            <h1><?php the_title() ?></h1>

            <div class="text">
                <?php the_content(); ?>
            </div>

            <?php endwhile; endif;?>
    
        </div>
            
    </article>
    <article id="bragantequinha" class="container-fluid conteudo">
        <div class="row conteudo">
            <div class="col-md-6">
                <?php
                    $args = array(
                        'category_name' => 'bragantequinha',
                    );

                    $custom_query = new WP_Query( $args );

                    if (have_posts()):
                        while ($custom_query->have_posts()): $custom_query->the_post();
                ?>
                <h1><?php the_title() ?></h1>
                <div class="text text-justify" style="margin-bottom: 40px;">
                    <?php the_content()?>
                </div>
                    <?php endwhile; endif;?>
            </div>
            <div class="col-md-6 text-center">
                <div><img class="posicao" src="" alt=""></div>
                <div><img class="posicao2" src="" alt=""></div>
                <div><img class="posicao3" src="" alt=""></div>
                <div><img class="mudaImg" src="<?php echo get_stylesheet_directory_uri();?>/src/img/seta.png" width="40"></div>
            </div>
            <div>
                <button type="text" class="btn galeria ">
                    <a class="galeria">Ir para a galeria de fotos</a>
                </button>
            </div>
        </div>
    </article>
    <article id="anteriores" class="container-fluid conteudo">
        <div class="row conteudo">
            <div class="col-md-6">
                <?php
                    $args = array(
                        'category_name' => 'anteriores',
                    );

                    $custom_query = new WP_Query( $args );

                    if (have_posts()):
                        while ($custom_query->have_posts()): $custom_query->the_post();
                ?>
                <h1><?php the_title() ?></h1>
                <div class="text text-justify">
                    <?php the_content()?>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div><img class="posicaoAnt" src="" alt=""></div>
                <div><img class="posicaoAnt2" src="" alt=""></div>
                <div><img class="posicaoAnt3" src="" alt=""></div>
                <div><img class="mudaImgAnt" src="<?php echo get_stylesheet_directory_uri();?>/src/img/seta.png" width="40"></div>
            </div>
            <div>
                <button type="text" class="btn galeria ">
                    <a class="galeria">Ir para a galeria de fotos</a>
                </button>
            </div>
            <?php endwhile; endif;?>
        </div>
    </article>
    <article id="apoio" class="container-fluid conteudo">
        <div class="row conteudo">
            <div class="col-md-6">
                <?php
                    $args = array(
                        'category_name' => 'apoio',
                    );

                    $custom_query = new WP_Query( $args );

                    if (have_posts()):
                        while ($custom_query->have_posts()): $custom_query->the_post();
                ?>
               <h1><?php the_title() ?></h1>
 
                <div class="text">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_post_thumbnail_caption()?>"/>
            </div>
            <?php endwhile; endif;?>
        </div>
    </article>
    
</main>


<?php get_footer() ?>