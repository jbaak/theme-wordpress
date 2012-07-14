<section class="wrap">
	
	<div id="slider">
			 <div class="slider-wrapper theme-default">
			 <div class="ribbon"></div>
			 <div id="nivoslider" class="nivoSlider">
			 <?php #query_posts('category_name=slider&posts_per_page=3' );
			 while ( have_posts() ) : the_post(); ?>
			 <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( 'homepage-slider' ); ?></a>
			 <?php endwhile; wp_reset_query(); ?>
			 </div>
			 </div>
 	</div><!-- end of nivoslider -->

</section>