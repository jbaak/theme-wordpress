<?php include(TEMPLATEPATH.'/header_page.php'); ?>
                
         
        
        <div id="contenido_por_id">
            <div class="wrap"> <!-- wrap -->

           
              
              <section id="cont">
                      <!-- loop -->
                                <?php 

                                if (have_posts()) :  while (have_posts()) : the_post(); ?>
                                
                         <article id="post_id">
                                                

                                              <div id="scrollrama">

                                                      <!--- custom field-->
                                                      <div id="imagen_post">
                                                        <?php $postimageurl = get_post_meta($post->ID, 'big', true);
                                                          if ($postimageurl) {
                                                          ?>
                                                          <img src="<?php echo $postimageurl; ?>" alt="alt"/>
                                                          <?php } else { ?>
                                                          <img src="<?php bloginfo('template_url'); ?>/images/thumb01.jpg" alt="alt"/>
                                                          <?php } ?>
                                                     </div>
                                              <!--- fin custom field-->
                                                                                                                                                    
                                                      <div class="paralax1 para">
                                                        <h2><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a></h2>
                                                      </div>                                                      
                                                    
                                                     <div class="paralax2 para"> 
                                                      <h2>Categoria: <?php the_category(', ') ?></h2>
                                                     </div>

                                                     <div class="paralax3 para">
                                                      <h2><?php echo ' Publicado hace '. human_time_diff(get_the_time('U'), current_time('timestamp')); ?>
                                                      <!--<img class="com" src="<?php bloginfo('template_url'); ?>/images/comentarios.ico"  alt="Comentarios"/>-->
                                                      
                                                      <?php comments_popup_link(' Sin comentarios', ' 1 comentario', ' % comentarios'); ?></h2>
                                                      </div>

                                                  </div><!--fin scrollrama -->

                                                  <div id="contenido_post">
                                                 <?php the_content(); ?>
                                                 </div>

                                                  
                                                  
                                                  
                                                
                                                  <!-- post -->
                                                  
                                                  <!-- fin post -->

                                                  <!--<p>Escrito por: <?php the_author() ?>, Categoria: <?php the_category() ?></p>-->

                        </article>       

                                <?php endwhile;  else:  endif; ?>
                                  <!--fin  loop -->

                                
                                  <!-- descripcion del autor-->

                        <div id="authorbox">
                                  <?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_email(), '70' ); }?>
                                      <div class="authortext">
                                      <h4>Escrito por <a href="<?php the_author_meta('user_url'); ?>"><?php the_author_meta('display_name'); ?></a></h4>
                                      <p><?php the_author_meta('description'); ?></p>
                                      <p>Me puedes seguir en <a href="">Twitter</a> y <a  href="">Facebook</a></p>
                                      </div>
                        </div>

                                  <!-- Comentarios-->
                                
                                    <?php comments_template();?>
                                   
               </section>
               
               



               <?php include(TEMPLATEPATH.'/sidebar.php'); ?>
                               
         
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
          
      
            
                
   

    

    
   
    
   
    

    

  
