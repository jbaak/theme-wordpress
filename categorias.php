<section id="categorias">
         <div id="cat_cent">
         
                <div class="cat"> <!-- cat -->
                      <?php  query_posts('category_name=Android&showposts=1'); 

                        if (have_posts()) :  while (have_posts()) : the_post(); ?>
                        
                          <img  src="<?php bloginfo('template_url')?>/images/<?php  iconcat();?>.png" alt="<?php  iconcat();?>" /> 

                          <div class="titulo_cat">
                           <?php the_category() ?>
                           </div>
                           
                        <?php endwhile;  else:  endif; ?>
                          <!--fin  loop -->
                    <?php wp_reset_query();?>

                      
                </div> <!-- fin cat-->

                <div class="cat"> <!-- cat -->
                      <?php  query_posts('category_name=PHP&showposts=1'); 

                        if (have_posts()) :  while (have_posts()) : the_post(); ?>
                        
                          <img  src="<?php bloginfo('template_url')?>/images/<?php  iconcat();?>.png" alt="<?php  iconcat();?>" /> 

                           <div class="titulo_cat">
                           <?php the_category() ?>
                           </div>
                          
                        <?php endwhile;  else:  endif; ?>
                          <!--fin  loop -->
                    <?php wp_reset_query();?>

                      
                </div> <!-- fin cat-->

                <div class="cat"> <!-- cat -->
                      <?php  query_posts('category_name=ror&showposts=1'); 

                        if (have_posts()) :  while (have_posts()) : the_post(); ?>
                        
                          <img  src="<?php bloginfo('template_url')?>/images/<?php  iconcat();?>.png" alt="<?php  iconcat();?>" /> 

                          <div class="titulo_cat">
                           <?php the_category() ?>
                           </div>

                        <?php endwhile;  else:  endif; ?>
                          <!--fin  loop -->
                    <?php wp_reset_query();?>

                      
                </div> <!-- fin cat-->

                <div class="cat"> <!-- cat -->
                      <?php  query_posts('category_name=python-poo&showposts=1'); 

                        if (have_posts()) :  while (have_posts()) : the_post(); ?>
                        
                          <img  src="<?php bloginfo('template_url')?>/images/<?php  iconcat();?>.png" alt="<?php  iconcat();?>" /> 

                           <div class="titulo_cat">
                           <?php the_category() ?>
                           </div>
                           
                        <?php endwhile;  else:  endif; ?>
                          <!--fin  loop -->
                    <?php wp_reset_query();?>

                      
                </div> <!-- fin cat-->

                <div class="cat"> <!-- cat -->
                      <?php  query_posts('category_name=html5&showposts=1'); 

                        if (have_posts()) :  while (have_posts()) : the_post(); ?>
                        
                          <img  src="<?php bloginfo('template_url')?>/images/<?php  iconcat();?>.png" alt="<?php  iconcat();?>" /> 

                           <div class="titulo_cat">
                           <?php the_category() ?>
                           </div>
                           
                        <?php endwhile;  else:  endif; ?>
                          <!--fin  loop -->
                    <?php wp_reset_query();?>

                      
                </div> <!-- fin cat-->

              

            </div>



              
         </section>