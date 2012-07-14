<?php 
function cambiar_final_extracto()
{
	return '<div class="leer"><a  title="Continua leyendo" href=" '.get_permalink().' " rel="nofollow"> Leer Mas...</a></div>';
}

add_filter('excerpt_more','cambiar_final_extracto');

function largo_extracto($length)
{
	return 30;
}

add_filter('excerpt_length','largo_extracto');

/*  agregar botones de compartir en redes sociales al content*/
function compartir($content){
   /*  preguntamos si no es la pagina feed ,  home o single.php  realiza lo siguente*/
    if(!is_feed() && !is_home() && !is_page()) {
        $content .= '<div class="compartir">
                    <a title="Enviar a Twitter" href="http://twitter.com/share"
class="twitter-share-button"
data-count="horizontal">Tuitear</a>
                    <script type="text/javascript"
src="http://platform.twitter.com/widgets.js"></script>
                    <div class="facebook-share-button">
                        <iframe
src="http://www.facebook.com/plugins/like.php?href='.
urlencode(get_permalink($post->ID))
.'&amp;layout=button_count&amp;show_faces=false&amp;width=200&amp;action=like&amp;colorscheme=light&amp;height=21"
scrolling="no" frameborder="0" style="border:none;
overflow:hidden; width:200px; height:21px;"
allowTransparency="true"></iframe>
                    </div>
                </div>';
    }
    return $content;
}
add_action('the_content', 'compartir');

//estilos para nivo
add_theme_support( 'post-thumbnails' );
add_image_size( 'homepage-thumb', 290, 130, true );

    
add_image_size( 'homepage-slider', 920, 310, true );

//funcion para las imagenes de las categorias
function iconcat()
      {
           //extraemos el nombre de la categoría y la cargamos a una variable
           $category = get_the_category();
           $nombrecat = $category[0]->category_nicename;
                    //imprimimos la etiqueta de la imagen
           echo $nombrecat;
       }


if(function_exists('register_sidebar'))
register_sidebar(array(
'before_widget'=>'',
'after_widget'=>'',
'before_title'=>'<h3>',
'after_title'=>'</h3>',
));



?>

