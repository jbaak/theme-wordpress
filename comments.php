<?php

	if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Por favor no cargues esta pagina.Gracias');
	
	if(post_password_required())
	{
	?>
	
	<p class="nocomments">Este post esta protegido con password</p>
	
	<?php
	return;
	

	}
	
	?>
	
	<div id="comments">
		<h3><?php comments_number('No hay comentarios');?></h3>
		
		<?php
		
		//Muestra los post y ocuparemos un loop
		if(have_comments()):
		
		?>
		
		<ol class="commentlist">
		
			<?php wp_list_comments('avatar_size=71&type=comment')?>
		</ol>
		
		<div class="paginator">
		
			<p class="older"><?php previous_comments_link('Anteriores')?></p>
			<p class="older"><?php next_comments_link('Siguientes')?></p>
		
		
		</div>
	
	
		<?php

		endif;
		?>	

<?php


//si continan abiertos lso comentarios

	if(comments_open()):
	
?>

	<div id="respond">

				<h3>Deja un comentario</h3>
				
				<form action="<?php echo get_option('siteurl')?>/wp-comments-post.php" method="post" id="commentform">
				
					<fieldset>
					
						<div class="fields">
						
									<div class="campo">
									
										<label for="author">Nombre (Obligatorio)</label>
										<input type="text" name="author" id="author" value="<?php $comment_author; ?>"/>
									</div>
						 	
									<div class="campo">
									
										<label for="author">Email (Obligatorio)</label>
										<input type="text" name="email" id="email" value="<?php $comment_author_email; ?>"/>
									</div>
									
									<div class="campo">
									
										<label for="url">Website</label>
										<input type="text" name="url" id="url" value="<?php $comment_author_url; ?>"/>
									</div>
				
						</div>
						
						
						<div class="comment">
							<div class="campo">
									
							<label >Mensaje (Obligatorio)</label>
							</div>
							<textarea name="comment" id="comment" cols="70%" rows="10"></textarea>
							
							<input type="submit" class="commentsubmit" value="" alt="Enviar"/>
							
						</div>
						
							
					<?php comment_id_fields();?>	
					
					<?php do_action('comment_form',$post->ID)?>
				  </fieldset>
			
			 </form>
			
			<p class="cancel"><?php cancel_comment_reply_link('Cancelar respuesta')?></p>
			
		</div><!-- termina div respond-->
	
	<?php
	else:
	?>
	
	<h3>Los comentarios siguen abiertos</h3>
	
	<?php endif;?>
	
	</div> <!-- termina div comments-->