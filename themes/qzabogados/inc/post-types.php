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

	// tmptnj-columnsPost
	$labels = array(
		'name'          => 'Columns Post',
		'singular_name' => 'Columns Post',
		'add_new'       => 'Nuevo Post',
		'add_new_item'  => 'Nuevo Post',
		'edit_item'     => 'Editar Post',
		'new_item'      => 'Nuevo Post',
		'all_items'     => 'Columns Post',
		'view_item'     => 'Ver Post',
		'search_items'  => 'Buscar Post',
		'not_found'     => 'No hay Post.',
		'menu_name'     => 'Columns Post'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php?post_type=page',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'postColumnsPost' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
		//'menu_icon' 		 => 'dashicons-admin-users'
	);
	register_post_type( 'postColumnsPost', $args );

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

});