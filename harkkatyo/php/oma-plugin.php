<?php
/*
Plugin Name: Oma Custom Post Type
Description: Add post types for custom articles
Author: Tanja Korolainen
*/
// Hook <strong>lc_custom_post_custom_article()</strong> to the init action hook
add_action( 'init', 'esittely_sivu' );
// The custom function to register a custom article post type
function esittely_sivu() {
// Set the labels, this variable is used in the $args array
$labels = array(
'name'               => __( 'Esittely sivu' ),
'singular_name'      => __( 'Esittely sivu' ),
'add_new'            => __( 'Add New Esittely Sivu' ),
'add_new_item'       => __( 'Add New Esittely Sivu' ),
'edit_item'          => __( 'Edit Esittely Sivu' ),
'new_item'           => __( 'New Esittely Sivu' ),
'all_items'          => __( 'All Esittely Sivut' ),
'view_item'          => __( 'View Esittely Sivu' ),
'search_items'       => __( 'Search Esittely Sivu' ),
'featured_image'     => 'Poster',
'set_featured_image' => 'Add Poster'
);
// The arguments for our post type, to be entered as parameter 2 of register_post_type()
$args = array(
'labels'            => $labels,
'description'       => 'Holds our Esittely Sivun  specific data',
'public'            => true,
'menu_position'     => 5,
'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'author' ),
'has_archive'       => true,
'show_in_admin_bar' => true,
'show_in_nav_menus' => true,
'query_var'         => true,
);
// Call the actual WordPress function
// Parameter 1 is a name for the post type
// Parameter 2 is the $args array
register_post_type( 'esittely', $args);
}
