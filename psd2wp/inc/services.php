<?php 
// Register Custom Post Type
function services_post_type() {

	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'psd2wp' ),
		'singular_name'         => _x( 'Services', 'Post Type Singular Name', 'psd2wp' ),
		'menu_name'             => __( 'services', 'psd2wp' ),
		'name_admin_bar'        => __( 'services', 'psd2wp' ),
		'archives'              => __( 'services Archives', 'psd2wp' ),
		'attributes'            => __( 'services Attributes', 'psd2wp' ),
		'parent_item_colon'     => __( 'Parent Item:', 'psd2wp' ),
		'all_items'             => __( 'all services', 'psd2wp' ),
		'add_new_item'          => __( 'Add New services', 'psd2wp' ),
		'add_new'               => __( 'Add services', 'psd2wp' ),
		'new_item'              => __( 'New services', 'psd2wp' ),
		'edit_item'             => __( 'Edit services', 'psd2wp' ),
		'update_item'           => __( 'Update Item', 'psd2wp' ),
		'view_item'             => __( 'View services', 'psd2wp' ),
		'view_items'            => __( 'View services', 'psd2wp' ),
		'search_items'          => __( 'Search services', 'psd2wp' ),
		'not_found'             => __( 'Not found', 'psd2wp' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'psd2wp' ),
		'featured_image'        => __( 'Featured Image', 'psd2wp' ),
		'set_featured_image'    => __( 'Set featured image', 'psd2wp' ),
		'remove_featured_image' => __( 'Remove featured image', 'psd2wp' ),
		'use_featured_image'    => __( 'Use as featured image', 'psd2wp' ),
		'insert_into_item'      => __( 'Insert into item', 'psd2wp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this services', 'psd2wp' ),
		'items_list'            => __( 'services list', 'psd2wp' ),
		'items_list_navigation' => __( 'services list navigation', 'psd2wp' ),
		'filter_items_list'     => __( 'Filter services list', 'psd2wp' ),
	);
	$args = array(
		'label'                 => __( 'Services', 'psd2wp' ),
		'description'           => __( 'Post Type Description', 'psd2wp' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-networking',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'services', $args );

}
add_action( 'init', 'services_post_type', 0 );