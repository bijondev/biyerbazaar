<?php
function create_posttype_slider() {

	register_post_type( 'cs-slider',
	// CPT Options
		array(
			'labels' => array(
                'name' => 'Slider',
                'singular_name' => 'Slider',
                'add_new' => 'Add New Slider',
                'add_new_item' => 'Add New Slider',
                'edit' => 'Edit',
                'edit_item' => 'Edit Slider',
                'new_item' => 'New Slider',
                'view' => 'View',
                'view_item' => 'View Slider',
                'search_items' => 'Search',
                'not_found' => 'No Slider found',
                'not_found_in_trash' => 'No Slider found in Trash',
                'parent' => 'Parent Slider Review'
            ),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'slider'),
			'supports'            => array( 'title', 'thumbnail' ),
		)
	);
    flush_rewrite_rules( false );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype_slider' );
//hook into the init action and call create_topics_nonhierarchical_taxonomy when it fires
add_filter( 'rwmb_meta_boxes', 'sliders_prefix_meta_boxes' );
function sliders_prefix_meta_boxes( $meta_boxes ) {
    $prefix="slider_";
    $meta_boxes[] = array(
        'title'      => __( 'Others Information', 'textdomain' ),
        'post_types' => 'cs-slider',
        'fields'     => array(
            array(
                'id'   => $prefix.'link',
                'name' => __( 'Link', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'   => $prefix.'order',
                'name' => __( 'Order', 'textdomain' ),
                'type' => 'text',
            ),
            
        ),
    );
    return $meta_boxes;
}
// ONLY MOVIE CUSTOM TYPE POSTS
add_filter('manage_cs-slider_posts_columns', 'ST4_columns_head_only_team', 2);
add_action('manage_cs-slider_posts_custom_column', 'ST4_columns_content_only_team', 2, 2);
 
// CREATE TWO FUNCTIONS TO HANDLE THE COLUMN
function ST4_columns_head_only_team($defaults) {
    $columns['cs-image'] = __( 'Picture' );
    $columns['title'] = __( 'Title' );
    $columns['cs-order'] = __( 'Order' );
    return $columns;
}
function ST4_columns_content_only_team($column, $post_ID) {
    if($column == 'cs-image'){?>

        <?php if ( has_post_thumbnail() ) : ?>

              <img width="100" height="100" src="<?php the_post_thumbnail_url(array(100, 100)); ?>"  />
            <?php endif; ?>
<?php
    }

    if ($column == 'title') {
        echo get_the_title();
    }
    if ($column == 'cs-order') {
        echo get_post_meta( $post_ID, 'slider_order', true );
    }
}
