<?php include(TEMPLATEPATH.'/header_page.php'); ?>
      
        
        <div id="contenido">
            <div class="wrap"> <!-- wrap -->

           
              
              <section id="cont">
                      <!-- loop -->
                                <?php 

                                if (have_posts()) :  while (have_posts()) : the_post(); ?>
                                
                         <article id="paginas">

                                             
                                                  
                                                  <!-- titulo -->
                                                  <h2><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a></h2>
                                                  <!-- fin titutlo--> 

                                                  
                                                  
                                                 

                                                  <p><?php the_content();?></p>
                                                 
                                                  
                                                
                                                  <!-- post -->
                                                  
                                                  <!-- fin post -->

                                                  <!--<p>Escrito por: <?php the_author() ?>, Categoria: <?php the_category() ?></p>-->

                        </article>       

                                <?php endwhile;  else:  endif; ?>
                                  <!--fin  loop -->

                                 
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
          
      
            
                
   

    

    
   
    
   
    

    

  
