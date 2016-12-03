<?php
function create_posttype_testmonial() {

	register_post_type( 'testmonial',
	// CPT Options
		array(
			'labels' => array(
                'name' => 'Testmonial',
                'singular_name' => 'Testmonial',
                'add_new' => 'Add New Testmonial',
                'add_new_item' => 'Add New Testmonial',
                'edit' => 'Edit',
                'edit_item' => 'Edit Testmonial',
                'new_item' => 'New Testmonial',
                'view' => 'View',
                'view_item' => 'View Testmonial',
                'search_items' => 'Search',
                'not_found' => 'No Testmonial found',
                'not_found_in_trash' => 'No Testmonial found in Trash',
                'parent' => 'Parent Testmonial Review'
            ),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'testmonial'),
			'supports'            => array( 'title', 'editor', 'thumbnail', 'comments','tags' ),
		)
	);
    flush_rewrite_rules( false );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype_testmonial' );
//hook into the init action and call create_topics_nonhierarchical_taxonomy when it fires
add_filter( 'rwmb_meta_boxes', 'tours_prefix_meta_boxes' );
function tours_prefix_meta_boxes( $meta_boxes ) {
    $prefix="testmonial_";
    $meta_boxes[] = array(
        'title'      => __( 'Others Information', 'textdomain' ),
        'post_types' => 'testmonial',
        'fields'     => array(
            array(
                'id'   => $prefix.'client_city',
                'name' => __( 'Client City', 'textdomain' ),
                'type' => 'text',
            ),
            
        ),
    );
    return $meta_boxes;
}