<aside>
	

	

	<div class="widged">
		<h3>Ultimas Noticias</h3>
		<div class="azul">
			<ul>
			<?php get_archives('postbypost', 5); ?>
			</ul>
		</div>
	</div>

	<div class="widged">
		<h3>Categorias</h3>
		<div class="azul">
			<ul>
			<?php wp_list_categories('title_li'); ?>
			</ul>
		</div>
	</div>
	
	

	
			<div>
				<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fplatform&amp;width=280&amp;height=350&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:280px; height:350px;" allowTransparency="true"></iframe>
			</div>

	<div class="social">
		<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
		<script>
		new TWTR.Widget({
		  version: 2,
		  type: 'profile',
		  rpp: 4,
		  interval: 30000,
		  width: 280,
		  height: 300,
		  theme: {
		    shell: {
		      background: '#666466',
		      color: '#1e8fff'
		    },
		    tweets: {
		      background: '#ffffff',
		      color: '#666466',
		      links: '#1e8fff'
		    }
		  },
		  features: {
		    scrollbar: false,
		    loop: true,
		    live: true,
		    behavior: 'default'
		  }
		}).render().setUser('jbaak').start();
		</script>
	</div>

	


</aside>  