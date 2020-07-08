<?php


// TAXONOMIES ////////////////////////////////////////////////////////////////////////
add_action( 'init', 'custom_taxonomies_callback', 0 );
function custom_taxonomies_callback(){

	// Servicios - Tipo de servicio
	if( ! taxonomy_exists('servicio')){

		$labels = array(
			'name'              => 'Tipo de servicio',
			'singular_name'     => 'Tipo de servicio',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar tipo',
			'update_item'       => 'Actualizar tipo',
			'add_new_item'      => 'Nueva tipo',
			'menu_name'         => 'Tipo de servicio'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'tipo' ),
		);

		register_taxonomy( 'tipo', 'servicios', $args );
	}
	wp_insert_term( 'Otro', 'tipo' );

}