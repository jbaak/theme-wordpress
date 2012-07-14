<?php include(TEMPLATEPATH.'/header_page.php'); ?>
      
        
        <div id="contenido">
            <div class="wrap"> <!-- wrap -->

           
              
              <section id="cont">
                      <!-- loop -->
                                <?php 

                                if (have_posts()) :  while (have_posts()) : the_post(); ?>
                                
                         <article id="paginas">

                                           <h1>Estas perdido</h1>  

                                            <div id="buscador">
                                              <?php $search_text = "Buscar"; ?>

                                              <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                                              <input type="text" value="<?php echo $search_text; ?>" name="s" id="s" onblur="if (this.value == '') {this.value = '<?php echo $search_text; ?>';}" onfocus="if (this.value == '<?php echo $search_text; ?>') {this.value = '';}" />
                                              <input type="hidden" id="searchsubmit" />
                                              </form>
                                            </div>
                                                  
                                                  

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
          
      
            
                
   

    

    
   
    
   
    

    

  
