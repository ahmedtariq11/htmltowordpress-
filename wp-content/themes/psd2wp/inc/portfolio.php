<?php


// Register Custom Post Type
function portfolio_post_type() {

	$labels = array(
		'name'                  => _x( 'Post Types', 'Post Type General Name', 'psd2wp' ),
		'singular_name'         => _x( '', 'Post Type Singular Name', 'psd2wp' ),
		'menu_name'             => __( 'Portfolios', 'psd2wp' ),
		'name_admin_bar'        => __( 'Portfolios', 'psd2wp' ),
		'archives'              => __( 'Portfolios Archives', 'psd2wp' ),
		'attributes'            => __( 'Portfolios Attributes', 'psd2wp' ),
		'parent_item_colon'     => __( 'Parent portfolio:', 'psd2wp' ),
		'all_items'             => __( 'All Portfolios', 'psd2wp' ),
		'add_new_item'          => __( 'Add portfolio', 'psd2wp' ),
		'add_new'               => __( 'Add New', 'psd2wp' ),
		'new_item'              => __( 'New Item', 'psd2wp' ),
		'edit_item'             => __( 'Edit Item', 'psd2wp' ),
		'update_item'           => __( 'Update Item', 'psd2wp' ),
		'view_item'             => __( 'View portfolio', 'psd2wp' ),
		'view_items'            => __( 'View Portfolios', 'psd2wp' ),
		'search_items'          => __( 'Search Portfolios', 'psd2wp' ),
		'not_found'             => __( 'Not found', 'psd2wp' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'psd2wp' ),
		'featured_image'        => __( 'Featured Image', 'psd2wp' ),
		'set_featured_image'    => __( 'Set featured image', 'psd2wp' ),
		'remove_featured_image' => __( 'Remove featured image', 'psd2wp' ),
		'use_featured_image'    => __( 'Use as featured image', 'psd2wp' ),
		'insert_into_item'      => __( 'Insert into item', 'psd2wp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolios', 'psd2wp' ),
		'items_list'            => __( 'Portfolios list', 'psd2wp' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'psd2wp' ),
		'filter_items_list'     => __( 'Filter Portfolios list', 'psd2wp' ),
	);
	$args = array(
		'label'                 => __( 'Portfolios', 'psd2wp' ),
		'description'           => __( 'Post Type Description', 'psd2wp' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'portfolio', $args );
	

}
add_action( 'init', 'portfolio_post_type', 0 );
