<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>blog | JesusBaak</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

      
    <link type="text/css" href="<?php bloginfo('stylesheet_url')?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Dynalight|Chango' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/scripts/nivo-slider.css" media="screen" >
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/scripts/themes/default/default.css" type="text/css" media="screen" >

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    
    <![endif]-->

    <script type="text/javascript" src="<?php  bloginfo('template_url');?>/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="<?php  bloginfo('template_url');?>/js/jquery.jrumble.1.3.min.js"></script>

      <!-- para hacer el efecto del logo que tiembla-->
      <script type="text/javascript">
      $().ready(function() {
        $('#logo').jrumble({
        x: 2,
        y: 2,
        rotation: 5,

        });
        
          $('#logo').hover(function(){
            $(this).trigger('startRumble');
          }, function(){
            $this = $(this);
            var demoTimeout;
            clearTimeout(demoTimeout);
            demoTimeout = setTimeout(function(){$this.trigger('stopRumble');}, 1000)
          });
      
      });
     </script>

     <!-- funcion que inicia el slider-->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
     $(window).load(function() {
     $('#nivoslider').nivoSlider();
     });
     </script>
    
  </head>

  <body >

          <header>

             <div class="wrap"><!-- wrap -->

                     <div id="logo">
                       <a href="<?php bloginfo('url');?>">JesusBaak<p>Blog</p></a>

                     </div> <!-- fin div logo-->
                  
                     <nav>
                         
                            <ul>
                               
                               <?php wp_list_pages( 'title_li=&depth=1' ); ?>
                           </ul>          
                              
                     </nav>

                     <div id="buscador">
                      <?php $search_text = "Buscar"; ?>

                      <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                      <input type="text" value="<?php echo $search_text; ?>" name="s" id="s" onblur="if (this.value == '') {this.value = '<?php echo $search_text; ?>';}" onfocus="if (this.value == '<?php echo $search_text; ?>') {this.value = '';}" />
                      <input type="hidden" id="searchsubmit" />
                      </form>
                    </div>

                     <div class="redes_a">
                          <ul>
                            <li>
                            <a href=""><img src="<?php bloginfo('template_url')?>/images/Facebookc.png" alt="Facebook" > </a> 
                            </li>
                            <li><a href=""><img src="<?php bloginfo('template_url')?>/images/Twitterc.png" alt="Twitter" ></a></li>
                            <li><a href=""><img src="<?php bloginfo('template_url')?>/images/LinkedInc.png" alt="LinkedInc" ></a></li>
                            <li><a href=""><img src="<?php bloginfo('template_url')?>/images/youtubec.png" alt="Youtube" ></a></li>
                          
                          </ul>
                    </div>
            
              </div><!-- fin wrap -->

          </header>

          <!-- -banner-->
                <?php include_once('banner.php'); ?>
        <!-- fin banner-->
         
          

          
