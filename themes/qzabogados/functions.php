<?php 

/**
* Define paths to javascript, styles, theme and site.
**/
define( 'JSPATH', get_stylesheet_directory_uri() . '/js/' );
define( 'THEMEPATH', get_stylesheet_directory_uri() . '/' );
define( 'SITEURL', get_site_url() . '/' );


/*------------------------------------*\
	#SNIPPETS
\*------------------------------------*/
require_once( 'inc/pages.php' );
require_once( 'inc/post-types.php' );
require_once( 'inc/taxonomies.php' );

/*------------------------------------*\
	#GENERAL FUNCTIONS
\*------------------------------------*/

/**
* Enqueue frontend scripts and styles
**/
add_action( 'wp_enqueue_scripts', function(){
 
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', array(''), '2.1.1', true );	
    /* Masonry*/
    wp_enqueue_script( 'imagesloaded_js', JSPATH.'imagesloaded.pkgd.min.js', array(), '', true );
    wp_enqueue_script( 'masonry_js', JSPATH.'packery.pkgd.min.js', array(), '', true );
    /* Slider */
    wp_enqueue_script( 'cycle2_js', JSPATH.'jquery.cycle2.min.js', array(), '', true );
    /* Animated */
    wp_enqueue_script( 'wow_js', JSPATH.'wow.min.js', array(), '', true );

	wp_enqueue_script( 'njtpt_functions', JSPATH.'functions.js', array(), '1.0', true );
    
	wp_localize_script( 'njtpt_functions', 'siteUrl', SITEURL );
	wp_localize_script( 'njtpt_functions', 'theme_path', THEMEPATH );
	
	// $is_home = is_front_page() ? "1" : "0";
	// wp_localize_script( 'rcc_functions', 'isHome', $is_home );
});

/**
* Configuraciones WP
*/

// Agregar css y js al administrador
function load_custom_files_wp_admin() {
        wp_register_style( 'njtpt_admin_css', THEMEPATH . '/admin/admin-style.css', false, '1.0.0' );
        wp_enqueue_style( 'njtpt_admin_css' );

        wp_register_script( 'njtpt_admin_js', THEMEPATH . 'admin/admin-script.js', false, '1.0.0' );
        wp_enqueue_script( 'njtpt_admin_js' );        
}
add_action( 'admin_enqueue_scripts', 'load_custom_files_wp_admin' );

//Change style login
function my_login_logo() { ?>
  <style type="text/css">
    body { background-color: #fff!important; }
    input#wp-submit { background-color: #182a46!important; }
    input#wp-submit:hover { background-color: #233d67!important; }
    #login h1 a, .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/share.jpg);
        width: 100px;
        height: 100px;
        background-size: contain;
        background-repeat: no-repeat;
    }
    .login label, .login #backtoblog a, .login #nav a { color: #23282d!important; }
  </style>
<?php }//end my_login_logo()
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
  return home_url();
}//end my_login_logo_url()
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
  return 'QZ ABOGADOS';
}//end my_login_logo_url_title()
add_filter( 'login_headertitle', 'my_login_logo_url_title' );


//Habilitar thumbnail en post
add_theme_support( 'post-thumbnails' ); 

//Habilitar menú (aparece en personalizar)
add_action('after_setup_theme', 'add_top_menu');
function add_top_menu(){
	register_nav_menu('top_menu',__('Top menu'));
}

//Delimitar número palabras excerpt
function custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//Perfil
function tmptnj_remove_menu_items() {
    remove_menu_page('edit.php'); // Posts 
    remove_menu_page('edit-comments.php'); // Comments
    //Editor
    if( current_user_can( 'editor' ) ):
        //remove_submenu_page( 'edit.php?post_type=product',  'product_attributes' );
        remove_menu_page('themes.php');
        remove_menu_page('tools.php'); // Tools
    endif;
}
add_action( 'admin_menu', 'tmptnj_remove_menu_items' );


/**
* Optimización
*/

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/* Aplaza el análisis de JavaScript para una carga más rápida */
if(!is_admin()) {
    // Move all JS from header to footer
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
}

/* Configuraciones WP - Search products */
function njtpt_search_filter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'postColumnsPost');
    }
    return $query;
}
add_filter('pre_get_posts','njtpt_search_filter');


/**
* CUSTOM FUNCTIONS
*/

/* Slider (tmptnj-slider) - Intro */
add_action( 'add_meta_boxes', 'intro_custom_metabox' );
function intro_custom_metabox(){
    add_meta_box( 'intro_meta', 'Enlace Botón intro', 'display_intro_atributos', 'intro', 'advanced', 'default');
}

function display_intro_atributos( $intro ){
    $slideBtnText   = esc_html( get_post_meta( $intro->ID, 'intro_slideBtnText', true ) );
    $slideBtnLink   = esc_html( get_post_meta( $intro->ID, 'intro_slideBtnLink', true ) );
?>
    <table class="tmptnj-custum-fields">
        <tr>
            <th>
                <label for="intro_slideBtnText">Texto Botón</label>
                <input type="text" id="intro_slideBtnText" name="intro_slideBtnText" placeholder="Texto Botón" value="<?php echo $slideBtnText; ?>">
            </th>
            <th>
                <label for="intro_slideBtnLink">Enlace Botón (URL)</label>
                <input type="text" id="intro_slideBtnLink" name="intro_slideBtnLink" placeholder="URL" value="<?php echo $slideBtnLink; ?>">
            </th>
        </tr>
    </table>
<?php }

add_action( 'save_post', 'intro_save_metas', 10, 2 );
function intro_save_metas( $idintro, $intro ){
    if ( $intro->post_type == 'intro' ){
        if ( isset( $_POST['intro_slideBtnText'] ) ){
            update_post_meta( $idintro, 'intro_slideBtnText', $_POST['intro_slideBtnText'] );
        }
        if ( isset( $_POST['intro_slideBtnLink'] ) ){
            update_post_meta( $idintro, 'intro_slideBtnLink', $_POST['intro_slideBtnLink'] );
        }
    }
}


/* Imagen y texto (tmptnj-columnsimage) - servicios */
add_action( 'add_meta_boxes', 'servicios_custom_metabox' );
function servicios_custom_metabox(){
    add_meta_box( 'servicios_meta', 'Detalles', 'display_servicios_atributos', 'servicios', 'advanced', 'default');
}

function display_servicios_atributos( $servicios ){
    $resumen   = esc_html( get_post_meta( $servicios->ID, 'servicios_resumen', true ) );
?>
    <table class="tmptnj-custum-fields">
        <tr>
            <td>
                <label for="servicios_resumen">Texto Botón</label>
                <textarea id="servicios_resumen" name="servicios_resumen" rows="5"><?php echo $resumen; ?></textarea>
            </td>
        </tr>
    </table>
<?php }

add_action( 'save_post', 'servicios_save_metas', 10, 2 );
function servicios_save_metas( $idservicios, $servicios ){
    if ( $servicios->post_type == 'servicios' ){
        if ( isset( $_POST['servicios_resumen'] ) ){
            update_post_meta( $idservicios, 'servicios_resumen', $_POST['servicios_resumen'] );
        }
    }
}


/* Tarjetas */
add_action( 'add_meta_boxes', 'tarjeta_custom_metabox' );
function tarjeta_custom_metabox(){
    add_meta_box( 'tarjeta_meta', 'Información', 'display_tarjeta_atributos', 'tarjeta', 'advanced', 'default');
}

function display_tarjeta_atributos( $tarjeta ){
    $puesto     = esc_html( get_post_meta( $tarjeta->ID, 'tarjeta_puesto', true ) );
    $correo     = esc_html( get_post_meta( $tarjeta->ID, 'tarjeta_correo', true ) );
    $telefono   = esc_html( get_post_meta( $tarjeta->ID, 'tarjeta_telefono', true ) );
    $whatsapp   = esc_html( get_post_meta( $tarjeta->ID, 'tarjeta_whatsapp', true ) );
    $ubicacion   = esc_html( get_post_meta( $tarjeta->ID, 'tarjeta_ubicacion', true ) );
    $direccion  = esc_html( get_post_meta( $tarjeta->ID, 'tarjeta_direccion', true ) );
    $redlinkedin = esc_html( get_post_meta( $tarjeta->ID, 'tarjeta_redlinkedin', true ) );
    $redfacebook = esc_html( get_post_meta( $tarjeta->ID, 'tarjeta_redfacebook', true ) );
    $redtwitter  = esc_html( get_post_meta( $tarjeta->ID, 'tarjeta_redtwitter', true ) );
    $banner      = esc_html( get_post_meta( $tarjeta->ID, 'tarjeta_banner', true ) );
?>
    <table class="tmptnj-custum-fields">
        <tr>
            <td><label for="tarjeta_puesto">Puesto</label></td>
            <td>
                <input type="text" id="tarjeta_puesto" name="tarjeta_puesto" value="<?php echo $puesto; ?>">
            </th>
        </tr>
        <tr>
            <td><label for="tarjeta_correo">Correo</label></td>
            <td>
                <input type="email" id="tarjeta_correo" name="tarjeta_correo" placeholder="ejemplo@@qzabogados.com.mx" value="<?php echo $correo; ?>">
            </td>
        </tr>
        <tr>
            <td><label for="tarjeta_telefono">Telefono</label></td>
            <td>
                <input type="tel" id="tarjeta_telefono" name="tarjeta_telefono" placeholder="5555555555" value="<?php echo $telefono; ?>">
            </td>
        </tr>
        <tr>
            <td><label for="tarjeta_whatsapp">Whatsapp</label></td>
            <td>
                <input type="tel" id="tarjeta_whatsapp" name="tarjeta_whatsapp" placeholder="5555555555" value="<?php echo $whatsapp; ?>">
            </td>
        </tr>
        <tr>
            <td><label for="tarjeta_direccion">Dirección</label></td>
            <td>
                <input type="text" id="tarjeta_ubicacion" name="tarjeta_ubicacion" value="<?php echo $ubicacion; ?>" placeholder="Ubicación">
                <textarea id="tarjeta_direccion" name="tarjeta_direccion" rows="3" placeholder="Dirección"><?php echo $direccion; ?></textarea>
            </td>
        </tr>
        <tr>
            <td><label for="tarjeta_redlinkedin">Redes sociales</label></td>
            <td>
                <label for="tarjeta_redlinkedin">Linkedin</label>
                <input type="text" id="tarjeta_redlinkedin" name="tarjeta_redlinkedin" value="<?php echo $redlinkedin; ?>">
                <label for="tarjeta_redfacebook">Facebook</label>
                <input type="text" id="tarjeta_redfacebook" name="tarjeta_redfacebook" value="<?php echo $redfacebook; ?>">
                <label for="tarjeta_redtwitter">Twitter</label>
                <input type="text" id="tarjeta_redtwitter" name="tarjeta_redtwitter" value="<?php echo $redtwitter; ?>">
            </td>
        </tr>
        <tr>
            <td><label for="tarjeta_banner">Imagen banner</label></td>
            <td>
                <input type="text" name="tarjeta_banner" id="tarjeta_banner" class="meta-image" value="<?php echo $banner; ?>">
                <input type="button" class="button image-upload" value="Seleccionar">
            </td>            
        </tr>
    </table>
<?php }

add_action( 'save_post', 'tarjeta_save_metas', 10, 2 );
function tarjeta_save_metas( $idtarjeta, $tarjeta ){
    if ( $tarjeta->post_type == 'tarjeta' ){
        if ( isset( $_POST['tarjeta_puesto'] ) ){
            update_post_meta( $idtarjeta, 'tarjeta_puesto', $_POST['tarjeta_puesto'] );
        }
        if ( isset( $_POST['tarjeta_correo'] ) ){
            update_post_meta( $idtarjeta, 'tarjeta_correo', $_POST['tarjeta_correo'] );
        }
        if ( isset( $_POST['tarjeta_telefono'] ) ){
            update_post_meta( $idtarjeta, 'tarjeta_telefono', $_POST['tarjeta_telefono'] );
        }
        if ( isset( $_POST['tarjeta_whatsapp'] ) ){
            update_post_meta( $idtarjeta, 'tarjeta_whatsapp', $_POST['tarjeta_whatsapp'] );
        }
        if ( isset( $_POST['tarjeta_ubicacion'] ) ){
            update_post_meta( $idtarjeta, 'tarjeta_ubicacion', $_POST['tarjeta_ubicacion'] );
        }
        if ( isset( $_POST['tarjeta_direccion'] ) ){
            update_post_meta( $idtarjeta, 'tarjeta_direccion', $_POST['tarjeta_direccion'] );
        }
        if ( isset( $_POST['tarjeta_redlinkedin'] ) ){
            update_post_meta( $idtarjeta, 'tarjeta_redlinkedin', $_POST['tarjeta_redlinkedin'] );
        }
        if ( isset( $_POST['tarjeta_redfacebook'] ) ){
            update_post_meta( $idtarjeta, 'tarjeta_redfacebook', $_POST['tarjeta_redfacebook'] );
        }
        if ( isset( $_POST['tarjeta_redtwitter'] ) ){
            update_post_meta( $idtarjeta, 'tarjeta_redtwitter', $_POST['tarjeta_redtwitter'] );
        }
        if ( isset( $_POST['tarjeta_banner'] ) ){
            update_post_meta( $idtarjeta, 'tarjeta_banner', $_POST['tarjeta_banner'] );
        }
    }
}