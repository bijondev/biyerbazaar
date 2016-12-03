<?php
function create_posttype_kazioffice() {

	register_post_type( 'kazioffice',
	// CPT Options
		array(
			'labels' => array(
                'name' => 'Kazi Office',
                'singular_name' => 'Kazi Office',
                'add_new' => 'Add New Kazi Office',
                'add_new_item' => 'Add New Kazi Office',
                'edit' => 'Edit',
                'edit_item' => 'Edit Kazi Office',
                'new_item' => 'New Kazi Office',
                'view' => 'View',
                'view_item' => 'View Kazi Office',
                'search_items' => 'Search',
                'not_found' => 'No Kazi Office found',
                'not_found_in_trash' => 'No Kazi Office found in Trash',
                'parent' => 'Parent Kazi Office Review'
            ),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'kazibari'),
			'supports'            => array( 'title', 'editor', 'thumbnail', 'comments','tags' ),
		)
	);
    flush_rewrite_rules( false );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype_kazioffice' );
add_action( 'init', 'kazioffice_tax' );
function kazioffice_tax() {
    register_taxonomy(
        'kazioffice',
        'kazioffice',
        array(
            'label' => __( 'Location' ),
            'rewrite' => array( 'slug' => 'location' ),
            'hierarchical' => true,
        )
    );
    

}

//hook into the init action and call create_topics_nonhierarchical_taxonomy when it fires
add_filter( 'rwmb_meta_boxes', 'kazioffice_prefix_meta_boxes' );
function kazioffice_prefix_meta_boxes( $meta_boxes ) {
    $prefix="cs_";
    $meta_boxes[] = array(
        'title'      => __( 'Others Information', 'textdomain' ),
        'post_types' => 'kazioffice',
        'fields'     => array(
            array(
                'id'   => $prefix.'phone',
                'name' => __( 'Phone', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'   => $prefix.'email',
                'name' => __( 'Email', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'   => $prefix.'website',
                'name' => __( 'Website', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'   => $prefix.'map',
                'name' => __( 'map', 'textdomain' ),
                'type' => 'textarea',
            ),
            
        ),
    );
    return $meta_boxes;
}