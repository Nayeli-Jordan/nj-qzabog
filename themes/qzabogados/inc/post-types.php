<?php

// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


add_action('init', function(){

	// TARJETAS
	$labels = array(
		'name'          => 'Tarjeta digital',
		'singular_name' => 'Tarjeta digital',
		'add_new'       => 'Nueva Tarjeta',
		'add_new_item'  => 'Nueva Tarjeta',
		'edit_item'     => 'Editar Tarjeta',
		'new_item'      => 'Nueva Tarjeta',
		'all_items'     => 'Tarjeta digital',
		'view_item'     => 'Ver Tarjeta',
		'search_items'  => 'Buscar Tarjeta',
		'not_found'     => 'No hay Tarjeta.',
		'menu_name'     => 'Tarjeta digital'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php?post_type=page',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'tarjeta' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'thumbnail' ),
		'menu_icon' 		 => 'dashicons-admin-users'
	);
	register_post_type( 'tarjeta', $args );	



	/*
	* QZAbogados
	*/

	// Slider home
	$labels = array(
		'name'          => 'Intro',
		'singular_name' => 'Intro',
		'add_new'       => 'Nuevo Intro',
		'add_new_item'  => 'Nuevo Intro',
		'edit_item'     => 'Editar Intro',
		'new_item'      => 'Nuevo Intro',
		'all_items'     => 'Intro',
		'view_item'     => 'Ver Intro',
		'search_items'  => 'Buscar Intro',
		'not_found'     => 'No hay Intro.',
		'menu_name'     => 'Intro'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php?post_type=page',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'intro' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
		//'menu_icon' 		 => 'dashicons-admin-users'
	);
	register_post_type( 'intro', $args );	

	// Nosotros
	$labels = array(
		'name'          => 'Nosotros',
		'singular_name' => 'Nosotros',
		'add_new'       => 'Nuevo Nosotros',
		'add_new_item'  => 'Nuevo Nosotros',
		'edit_item'     => 'Editar Nosotros',
		'new_item'      => 'Nuevo Nosotros',
		'all_items'     => 'Nosotros',
		'view_item'     => 'Ver Nosotros',
		'search_items'  => 'Buscar Nosotros',
		'not_found'     => 'No hay Nosotros.',
		'menu_name'     => 'Nosotros'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php?post_type=page',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'nosotros' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
		//'menu_icon' 		 => 'dashicons-admin-users'
	);
	register_post_type( 'nosotros', $args );

	// Servicios
	$labels = array(
		'name'          => 'Servicios',
		'singular_name' => 'Servicios',
		'add_new'       => 'Nueva servicio',
		'add_new_item'  => 'Nueva servicio',
		'edit_item'     => 'Editar servicio',
		'new_item'      => 'Nuevo servicio',
		'all_items'     => 'Servicios',
		'view_item'     => 'Ver servicio',
		'search_items'  => 'Buscar servicio',
		'not_found'     => 'No hay servicio.',
		'menu_name'     => 'Servicios'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php?post_type=page',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'servicios' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
		//'menu_icon' 		 => 'dashicons-admin-users'
	);
	register_post_type( 'servicios', $args );


});