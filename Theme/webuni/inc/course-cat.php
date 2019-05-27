<?php
// Register Custom Post Type Course Categories 
function create_coursecategories_cpt() {

	$labels = array(
		'name' => _x( 'Course Categories ', 'Post Type General Name', 'webuni' ),
		'singular_name' => _x( 'Course Categories ', 'Post Type Singular Name', 'webuni' ),
		'menu_name' => _x( 'Course Categories ', 'Admin Menu text', 'webuni' ),
		'name_admin_bar' => _x( 'Course Categories ', 'Add New on Toolbar', 'webuni' ),
		'archives' => __( 'Course Categories  Archives', 'webuni' ),
		'attributes' => __( 'Course Categories  Attributes', 'webuni' ),
		'parent_item_colon' => __( 'Parent Course Categories :', 'webuni' ),
		'all_items' => __( 'All Course Categories ', 'webuni' ),
		'add_new_item' => __( 'Add New Course Categories ', 'webuni' ),
		'add_new' => __( 'Add New', 'webuni' ),
		'new_item' => __( 'New Course Categories ', 'webuni' ),
		'edit_item' => __( 'Edit Course Categories ', 'webuni' ),
		'update_item' => __( 'Update Course Categories ', 'webuni' ),
		'view_item' => __( 'View Course Categories ', 'webuni' ),
		'view_items' => __( 'View Course Categories ', 'webuni' ),
		'search_items' => __( 'Search Course Categories ', 'webuni' ),
		'not_found' => __( 'Not found', 'webuni' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'webuni' ),
		'featured_image' => __( 'Featured Image', 'webuni' ),
		'set_featured_image' => __( 'Set featured image', 'webuni' ),
		'remove_featured_image' => __( 'Remove featured image', 'webuni' ),
		'use_featured_image' => __( 'Use as featured image', 'webuni' ),
		'insert_into_item' => __( 'Insert into Course Categories ', 'webuni' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Course Categories ', 'webuni' ),
		'items_list' => __( 'Course Categories  list', 'webuni' ),
		'items_list_navigation' => __( 'Course Categories  list navigation', 'webuni' ),
		'filter_items_list' => __( 'Filter Course Categories  list', 'webuni' ),
	);
	$args = array(
		'label' => __( 'Course Categories ', 'webuni' ),
		'description' => __( '', 'webuni' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-lightbulb',
		'supports' => array('title', 'editor'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'page',
	);
	register_post_type( 'course_categories', $args );

}
add_action( 'init', 'create_coursecategories_cpt', 0 );
