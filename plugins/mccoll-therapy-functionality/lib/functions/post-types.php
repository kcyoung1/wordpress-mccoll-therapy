<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

// Register Custom Post Type
function profile() {

	$labels = array(
		'name'                  => 'Profiles',
		'singular_name'         => 'Profile',
		'menu_name'             => 'Profiles',
		'name_admin_bar'        => 'Profile',
		'archives'              => 'Profile Archives',
		'parent_item_colon'     => 'Parent Profile:',
		'all_items'             => 'All Profiles',
		'add_new_item'          => 'Add New Profile',
		'add_new'               => 'Add New',
		'new_item'              => 'New Profile',
		'edit_item'             => 'Edit Profile',
		'update_item'           => 'Update Profile',
		'view_item'             => 'View Profile',
		'search_items'          => 'Search Profile',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into profile',
		'uploaded_to_this_item' => 'Uploaded to this profile',
		'items_list'            => 'Profiles list',
		'items_list_navigation' => 'Profiles list navigation',
		'filter_items_list'     => 'Filter profiles list',
	);
	$args = array(
		'label'                 => 'Profile',
		'description'           => 'Profile of the therapists',
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'trackbacks', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'profile', $args );

}
add_action( 'init', 'profile', 0 );

// Register Custom Post Type
function services() {

	$labels = array(
		'name'                  => 'Services',
		'singular_name'         => 'Service',
		'menu_name'             => 'Services',
		'name_admin_bar'        => 'Service',
		'archives'              => 'Service Archives',
		'parent_item_colon'     => 'Parent Service:',
		'all_items'             => 'All Services',
		'add_new_item'          => 'Add New Service',
		'add_new'               => 'Add New',
		'new_item'              => 'New Service',
		'edit_item'             => 'Edit Service',
		'update_item'           => 'Update Service',
		'view_item'             => 'View Service',
		'search_items'          => 'Search Service',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into service',
		'uploaded_to_this_item' => 'Uploaded to this service',
		'items_list'            => 'Services list',
		'items_list_navigation' => 'Services list navigation',
		'filter_items_list'     => 'Filter Services list',
	);
	$args = array(
		'label'                 => 'Service',
		'description'           => 'Services name, icon, and description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'trackbacks', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-clipboard',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'services', $args );

}
add_action( 'init', 'services', 0 );
