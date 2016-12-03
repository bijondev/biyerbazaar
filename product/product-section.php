
<ul class="horizontal_list clearfix tt_uppercase isotope_menu f_size_ex_large">
						<li class="active m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter="*">All</button></li>
						<?php
$args = array(
    'taxonomy'      => 'product_cat',
    'parent'        => 0, // get top level categories
    'orderby'       => 'name',
    'order'         => 'ASC',
    'hierarchical'  => 1,
    'pad_counts'    => 0
);

$categories = get_categories( $args );
//print_r($categories);
foreach ( $categories as $category ){

    //echo '<h3>'. $category->name . '</h3>';
  //echo '<li><a href="#" data-filter=".'. $category->slug . '" rel="'. $category->name . '">'. $category->name . '</a></li>';
	echo "<li class='m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr'><button class='button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none' data-filter='.".$category->slug."'>".$category->name."</button></li>";

    $sub_args = array(
        'taxonomy'      => 'protfolio-cat',
        'parent'        => $category->term_id, // get child categories
        'orderby'       => 'name',
        'order'         => 'ASC',
        'hierarchical'  => 1,
        'pad_counts'    => 0
    );

    $sub_categories = get_categories( $sub_args );

    foreach ( $sub_categories as $sub_category ){

       // echo '<li><a href="#" data-filter=".'. $sub_category->name . '" rel="'. $sub_category->name . '">'. $sub_category->name . '</a></li>';
    	echo "<li class='m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr'><button class='button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none' data-filter='.".$sub_category->slug."'>".$sub_category->name."</button></li>";

    }

}
?>


						
					</ul>
					<!--products-->
					<section class="products_container clearfix m_bottom_25 m_sm_bottom_15">
						<?php
						$params = array('posts_per_page' => -1, 'post_type' => 'product');
						$wc_query = new WP_Query($params);
						?>
						     <?php if ($wc_query->have_posts()) : ?>
						     <?php while ($wc_query->have_posts()) :
						                $wc_query->the_post(); ?>
						     <!--product item-->
						     <?php 
						$terms = get_the_terms( $post->ID, 'product_cat' );
//print_r($terms);
						 ?>
						<div class="product_item <?php foreach ($terms as $term) { echo $term->slug." ";
							    $sub_args = array(
						        'taxonomy'      => 'protfolio-cat',
						        'parent'        => $category->term_id, // get child categories
						        'orderby'       => 'name',
						        'order'         => 'ASC',
						        'hierarchical'  => 1,
						        'pad_counts'    => 0
						    );

						    $sub_categories = get_categories( $sub_args );
						    foreach ( $sub_categories as $sub_category ){
						    echo $sub_category->slug." ";
						}

						 } ?>">
						
							<figure class="r_corners photoframe shadow relative animate_ftb long">
								<!--product preview-->
								<a href="<?php echo get_permalink(); ?>" class="d_block relative pp_wrap">
									<!--sale product-->
									<span class="hot_stripe type_2">

									<img src="<?php echo bloginfo('template_directory'); ?>/images/sale_product_type_2.png" alt="">

									</span>
									<?php
									$thumb_id = get_post_thumbnail_id();
									$thumb_url = wp_get_attachment_image_src($thumb_id,'medium', true);
									//echo $thumb_url[0];
									?>
								<img src="<?php echo $thumb_url[0]; ?>" data-original="<?php echo $thumb_url[0]; ?> width="242" height="243" class="lazy tr_all_hover" alt="<?php the_title(); ?>">
								
									<!-- <span data-popup="#<?php echo $post->post_name;?>" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span> -->
								</a>
								<!--description and price of product-->
								<figcaption>
									<h5 class="m_bottom_10"><a href="<?php echo get_permalink(); ?>" class="color_dark"><?php the_title(); ?></a></h5>
									<div class="clearfix">
										<p class="scheme_color f_left f_size_large m_bottom_15">
										<?php
										if (get_post_meta( get_the_ID(), '_regular_price', true)) {
											?>
										<s><?php echo get_woocommerce_currency_symbol().get_post_meta( get_the_ID(), '_regular_price', true); ?></s> 
											<?php
										}
										?>
										
										<?php
										if (get_post_meta( get_the_ID(), '_sale_price', true)) {
											?>
										<?php echo get_woocommerce_currency_symbol().get_post_meta( get_the_ID(), '_sale_price', true); ?></p>
										<?php } ?>
										<!--rating-->
										<ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li>
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
										</ul>
									</div>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>?add-to-cart=<?php echo $post->ID; ?>" class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 ajax_add_to_cart">Add to Cart</a>
								</figcaption>
							</figure>
						</div>

						     <?php endwhile; ?>
						     <?php wp_reset_postdata(); ?>
						     <?php else:  ?>
						     <li>
						          <?php _e( 'No Products' ); ?>
						     </li>
						     <?php endif; ?>
						<!--product item-->
		

					</section>