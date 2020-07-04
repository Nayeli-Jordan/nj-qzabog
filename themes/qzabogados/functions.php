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
/*require_once( 'inc/taxonomies.php' );*/

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

//Habilitar thumbnail en post
add_theme_support( 'post-thumbnails' ); 

//Habilitar menú (aparece en personalizar)
add_action('after_setup_theme', 'add_top_menu');
function add_top_menu(){
	register_nav_menu('top_menu',__('Top menu'));
	register_nav_menu('footer_menu',__('Footer menu'));
}

//Delimitar número palabras excerpt
function custom_excerpt_length( $length ) {
	return 20;
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

/* Slider (tmptnj-slider) */
add_action( 'add_meta_boxes', 'tmptnj_slider_custom_metabox' );
function tmptnj_slider_custom_metabox(){
    add_meta_box( 'tmptnj_slider_meta', 'Enlace Botón Slider', 'display_tmptnj_slider_atributos', 'tmptnj_slider', 'advanced', 'default');
}

function display_tmptnj_slider_atributos( $tmptnj_slider ){
    $slideBtnText   = esc_html( get_post_meta( $tmptnj_slider->ID, 'tmptnj_slider_slideBtnText', true ) );
    $slideBtnLink   = esc_html( get_post_meta( $tmptnj_slider->ID, 'tmptnj_slider_slideBtnLink', true ) );
?>
    <table class="tmptnj-custum-fields">
        <tr>
            <th>
                <label for="tmptnj_slider_slideBtnText">Texto Botón</label>
                <input type="text" id="tmptnj_slider_slideBtnText" name="tmptnj_slider_slideBtnText" placeholder="Texto Botón" value="<?php echo $slideBtnText; ?>">
            </th>
            <th>
                <label for="tmptnj_slider_slideBtnLink">Enlace Botón (URL)</label>
                <input type="text" id="tmptnj_slider_slideBtnLink" name="tmptnj_slider_slideBtnLink" placeholder="URL" value="<?php echo $slideBtnLink; ?>">
            </th>
        </tr>
    </table>
<?php }

add_action( 'save_post', 'tmptnj_slider_save_metas', 10, 2 );
function tmptnj_slider_save_metas( $idtmptnj_slider, $tmptnj_slider ){
    if ( $tmptnj_slider->post_type == 'tmptnj_slider' ){
        if ( isset( $_POST['tmptnj_slider_slideBtnText'] ) ){
            update_post_meta( $idtmptnj_slider, 'tmptnj_slider_slideBtnText', $_POST['tmptnj_slider_slideBtnText'] );
        }
        if ( isset( $_POST['tmptnj_slider_slideBtnLink'] ) ){
            update_post_meta( $idtmptnj_slider, 'tmptnj_slider_slideBtnLink', $_POST['tmptnj_slider_slideBtnLink'] );
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
    $ubicacion   = esc_html( get_post_meta( $tarjeta->ID, 'tarjeta_ubicacion', true ) );
    $direccion  = esc_html( get_post_meta( $tarjeta->ID, 'tarjeta_direccion', true ) );
    $redlinkedin = esc_html( get_post_meta( $tarjeta->ID, 'tarjeta_redlinkedin', true ) );
    $redfacebook = esc_html( get_post_meta( $tarjeta->ID, 'tarjeta_redfacebook', true ) );
    $redtwitter  = esc_html( get_post_meta( $tarjeta->ID, 'tarjeta_redtwitter', true ) );
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
    }
}