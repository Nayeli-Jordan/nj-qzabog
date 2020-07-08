<?php

// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


add_action('init', function(){

	// tmptnj-slider
	$labels = array(
		'name'          => 'Slider',
		'singular_name' => 'Slider',
		'add_new'       => 'Nuevo Slide',
		'add_new_item'  => 'Nuevo Slide',
		'edit_item'     => 'Editar Slide',
		'new_item'      => 'Nuevo Slide',
		'all_items'     => 'Slider',
		'view_item'     => 'Ver Slide',
		'search_items'  => 'Buscar Slide',
		'not_found'     => 'No hay Slide.',
		'menu_name'     => 'Slider'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php?post_type=page',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'tmptnj_slider' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
		//'menu_icon' 		 => 'dashicons-admin-users'
	);
	register_post_type( 'tmptnj_slider', $args );	

	// tmptnj-columnsImage
	$labels = array(
		'name'          => 'Columns Image',
		'singular_name' => 'Columns Image',
		'add_new'       => 'Nueva Image',
		'add_new_item'  => 'Nueva Image',
		'edit_item'     => 'Editar Image',
		'new_item'      => 'Nuevo Image',
		'all_items'     => 'Columns Image',
		'view_item'     => 'Ver Image',
		'search_items'  => 'Buscar Image',
		'not_found'     => 'No hay Image.',
		'menu_name'     => 'Columns Image'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php?post_type=page',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'postColumnsImage' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
		//'menu_icon' 		 => 'dashicons-admin-users'
	);
	register_post_type( 'postColumnsImage', $args );

	// tmptnj-gallery
	$labels = array(
		'name'          => 'Gallery',
		'singular_name' => 'Gallery',
		'add_new'       => 'Nuevo Post',
		'add_new_item'  => 'Nuevo Post',
		'edit_item'     => 'Editar Post',
		'new_item'      => 'Nuevo Post',
		'all_items'     => 'Gallery',
		'view_item'     => 'Ver Post',
		'search_items'  => 'Buscar Post',
		'not_found'     => 'No hay Post.',
		'menu_name'     => 'Gallery'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php?post_type=page',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'postGallery' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
		//'menu_icon' 		 => 'dashicons-admin-users'
	);
	register_post_type( 'postGallery', $args );	

	// tmptnj-logos
	$labels = array(
		'name'          => 'Logos',
		'singular_name' => 'Logos',
		'add_new'       => 'Nuevo Logo',
		'add_new_item'  => 'Nuevo Logo',
		'edit_item'     => 'Editar Logo',
		'new_item'      => 'Nuevo Logo',
		'all_items'     => 'Logos',
		'view_item'     => 'Ver Logo',
		'search_items'  => 'Buscar Logo',
		'not_found'     => 'No hay Logo.',
		'menu_name'     => 'Logos'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php?post_type=page',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'postLogos' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'thumbnail' ),
		//'menu_icon' 		 => 'dashicons-admin-users'
	);
	register_post_type( 'postLogos', $args );

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