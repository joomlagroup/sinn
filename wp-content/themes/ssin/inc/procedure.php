<?php
add_action( 'init', 'create_portfolio_taxonomies', 0 );
// create two taxonomies, genres and writers for the post type "book"
function create_portfolio_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Category', 'taxonomy general name' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Find items' ),
		'all_items'         => __( 'All Category' ),
		'parent_item'       => __( 'Parent category' ),
		'parent_item_colon' => __( 'Parent category' ),
		'edit_item'         => __( 'Edit category' ),
		'update_item'       => __( 'Update category' ),
		'add_new_item'      => __( 'Add new category' ),
		'new_item_name'     => __( 'Add new' ),
		'menu_name'         => __( 'Procedure category' ),
	);
	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'procedure-category' , 'hierarchical' => true)
	);
	register_taxonomy( 'procedure_category', array( 'procedure' ), $args );
}

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                => _x( 'Procedure', 'Post Type General Name', 'sanpham' ),
		'singular_name'       => _x( 'Procedure', 'Post Type Singular Name', 'sanpham' ),
		'menu_name'           => __( 'Procedure', 'text_domain' ),
		'all_items'           => __( 'All Procedure', 'sanpham' ),
		'view_item'           => __( 'View Procedure', 'sanpham' ),
		'add_new_item'        => __( 'Add Procedure', 'sanpham' ),
		'add_new'             => __( 'Add Procedure', 'sanpham' ),
		'edit_item'           => __( 'Edit Procedure', 'sanpham' ),
		'update_item'         => __( 'Update Procedure', 'sanpham' ),
		'search_items'        => __( 'Search Procedure', 'sanpham' ),
		'not_found'           => __( 'Not Found', 'sanpham' ),
		'not_found_in_trash'  => __( 'Not Found', 'sanpham' ),
	);
	$args = array(
		'label'               => __( 'Procedure', 'sanpham' ),
		'description'         => __( 'Page Procedure ', 'sanpham' ),
		'labels'              => $labels,
		'hierarchical'        => false,
		'rewrite' 			  => true,
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'query_var'			  => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'rewrite' => array("slug" => "procedure", 'hierarchical' => true),
		'has_archive'         => true,
		'exclude_from_search' => false,
		'capability_type'     => 'page',
		'supports' => array(
	      'title',
	      'editor',


	      'excerpt',

	      'thumbnail',

	      'custom-fields'
	    )
	);
	register_post_type( 'procedure', $args );
	//flush_rewrite_rules();
}
// Hook into the 'init' action
add_action( 'init', 'custom_post_type');

/*
add_action( 'init', 'create_portfolio_taxonomies_type', 0 );
// create two taxonomies, genres and writers for the post type "book"
function create_portfolio_taxonomies_type() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Type', 'taxonomy general name' ),
        'singular_name'     => _x( 'Type', 'taxonomy singular name' ),
        'search_items'      => __( 'Find items' ),
        'all_items'         => __( 'All Type' ),
        'parent_item'       => __( 'Parent Type' ),
        'parent_item_colon' => __( 'Parent Type' ),
        'edit_item'         => __( 'Edit Type' ),
        'update_item'       => __( 'Update Type' ),
        'add_new_item'      => __( 'Add new Type' ),
        'new_item_name'     => __( 'Add new' ),
        'menu_name'         => __( 'Procedure Type' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'procedure-type' , 'hierarchical' => true)
    );
    register_taxonomy( 'procedure_type', array( 'procedure' ), $args );
}*/
