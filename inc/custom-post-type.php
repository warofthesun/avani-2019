<?php

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'starter_flush_rewrite_rules' );

// Flush your rewrite rules
function starter_flush_rewrite_rules() {
	flush_rewrite_rules();
}

// let's create the function for the custom type
function landing_page() {
	// creating (registering) the custom type
	register_post_type( 'landing_page', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Landing Pages', 'startertheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Landing Page', 'startertheme' ), /* This is the individual type */
			'all_items' => __( 'All Landing Pages', 'startertheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'startertheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Landing Page', 'startertheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'startertheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Landing Page', 'startertheme' ), /* Edit Display Title */
			'new_item' => __( 'New Landing Page', 'startertheme' ), /* New Display Title */
			'view_item' => __( 'View Landing Page', 'startertheme' ), /* View Display Title */
			'search_items' => __( 'Search Landing Page', 'startertheme' ), /* Search Landing Page Title */
			'not_found' =>  __( 'Nothing found in the Database.', 'startertheme' ), /* This displays if there are no entries yet */
			'not_found_in_trash' => __( 'Nothing found in Trash', 'startertheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example custom post type', 'startertheme' ), /* Landing Page Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-welcome-widgets-menus', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'lp', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'landing_page', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields', 'revisions')
		) /* end of options */
	); /* end of register post type */
}

	// adding the function to the Wordpress init
	add_action( 'init', 'landing_page');

?>
