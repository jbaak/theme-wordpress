<?php
/*
Template Name: ultimas-entradas
*/
?> 

<?php get_header(); ?>
               
  <?php include_once("categorias.php");?>       
        
        <div id="contenido">
            <div class="wrap"> <!-- wrap -->

           
              
              <section id="cont">
                      <!-- loop -->
                                <?php 

                                if (have_posts()) :  while (have_posts()) : the_post(); ?>
                                
                         <article>

                                              <!--- custom field-->
                                                  <?php $postimageurl = get_post_meta($post->ID, 'big', true);
                                                    if ($postimageurl) {
                                                    ?>
                                                    <img src="<?php echo $postimageurl; ?>" alt="alt"/>
                                                    <?php } else { ?>
                                                    <img src="<?php bloginfo('template_url'); ?>/images/thumb01.jpg" alt="alt"/>
                                                    <?php } ?>
                                              <!--- fin custom field-->
                                                  
                                                  
                                                  <!-- titulo -->
                                                  <h2><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a></h2>
                                                  <!-- fin titutlo--> 

                                                  
                                                  <?php echo 'Publicado hace '. human_time_diff(get_the_time('U'), current_time('timestamp')); ?>
                                                 

                                                  
                                                  <img class="com" src="<?php bloginfo('template_url'); ?>/images/comentarios.ico"  alt="Comentarios"/>
                                                  <p>
                                                  <?php comments_popup_link('0 ', '1 ', '%'); ?>
                                                  </p>
                                                  
                                                
                                                  <!-- post -->
                                                  
                                                  <!-- fin post -->

                                                  <!--<p>Escrito por: <?php the_author() ?>, Categoria: <?php the_category() ?></p>-->

                        </article>       

                                <?php endwhile;  else:  endif; ?>
                                  <!--fin  loop -->
               </section>
               
               <?php include_once("sidebar.php"); ?>
                               
         
          </div> <!-- wrap -->


       
      </div><!-- fin contenido--> 

      <div id="navegacion">
            <div id="ant">
            <?php next_posts_link('Entradas Anteriores') ?>
            </div>
            <div id="sig">
            <?php previous_posts_link('Entradas Recientes') ?>
            </div>
      </div>

        

<?php get_footer(); ?>
          
      
            
                
   

    

    
   
    
   
    

    

  
