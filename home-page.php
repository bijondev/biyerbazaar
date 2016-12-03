<?php
/**
 * Template Name: Home page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package adventure-tours
 */

get_header(); ?>
<?php get_sidebar('slider'); ?>
			<!--content-->
			<div class="page_content_offset">
				<div class="container">
				<!--product brands-->
					<div class="clearfix m_bottom_25 m_sm_bottom_20">
						<h2 class="tt_uppercase color_dark f_left heading2 animate_fade f_mxs_none m_mxs_bottom_15">Product Brands</h2>
						<div class="f_right clearfix nav_buttons_wrap animate_fade f_mxs_none">
							<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners pb_prev"><i class="fa fa-angle-left"></i></button>
							<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners pb_next"><i class="fa fa-angle-right"></i></button>
						</div>
					</div>
					<!--product brands carousel-->
					<div class="product_brands m_bottom_45 m_sm_bottom_35">
					<?php
					$categories = get_terms('product_brand', 'orderby=name&hide_empty=0');
					$count = "";
					if ($instance['post_counts'] == 1)
					$count = '( ' . esc_html($term->count) . ' )  ';
					foreach ($categories as $term) {
					?>
						<a href="<?php echo get_term_link($term, 'product_brand'); ?>" class="d_block t_align_c animate_fade"><img src="<?php echo brand_taxonomy_image_url($term->term_id) ? brand_taxonomy_image_url($term->term_id) : BRAND_IMAGE_PLACEHOLDER; ?>" alt="<?php echo $term->name . $count; ?>"></a>
					<?php } ?>

					</div>

					<div class="col-md-12">
						<!-- G&R_728x90 -->
						<script id="GNR38298">
						    (function (i,g,b,d,c) {
						        i[g]=i[g]||function(){(i[g].q=i[g].q||[]).push(arguments)};
						        var s=d.createElement(b);s.async=true;s.src=c;
						        var x=d.getElementsByTagName(b)[0];
						        x.parentNode.insertBefore(s, x);
						    })(window,'gandrad','script',document,'//content.green-red.com/lib/display.js');
						    gandrad({siteid:12408,slot:38298});
						</script>
						<!-- End of G&R_728x90 -->
					</div>
					
					<h2 class="tt_uppercase m_bottom_20 color_dark heading1 animate_ftr">All Products</h2>
					<!--filter navigation of products-->
					<?php get_template_part( 'product/product-section', 'none' ); ?>
					<!--banners-->
					<section class="row clearfix m_bottom_45 m_sm_bottom_35">
						<div class="col-lg-6 col-md-6 col-sm-6 animate_half_tc">
							<a href="https://www.facebook.com/Wedding-Planner-BD-737240103003719/" class="d_block banner wrapper r_corners relative m_xs_bottom_30">
								<img src="<?php echo bloginfo('template_directory'); ?>/banner/201.jpg" alt="">
								<span class="banner_caption d_block vc_child t_align_c w_sm_auto">
									<span class="d_inline_middle">
									<br/><br/><br/><br/><br/><br/><br/>
										<span class="button_type_6 bg_scheme_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
									</span>
								</span>
							</a>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 animate_half_tc">
							<a href="https://www.facebook.com/Birthday-Party-Planner-BD-923252261134392/" class="d_block banner wrapper r_corners type_2 relative">
								<img src="<?php echo bloginfo('template_directory'); ?>/banner/202.jpg" alt="">
								<span class="banner_caption d_block vc_child t_align_c w_sm_auto">
									<span class="d_inline_middle">
									<br/><br/><br/><br/><br/><br/><br/>
										<span class="button_type_6 bg_dark_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
									</span>
								</span>
							</a>
						</div>
					</section>
					<div class="col-md-12">
						<!-- G&R_728x90 -->
						<script id="GNR38302">
						    (function (i,g,b,d,c) {
						        i[g]=i[g]||function(){(i[g].q=i[g].q||[]).push(arguments)};
						        var s=d.createElement(b);s.async=true;s.src=c;
						        var x=d.getElementsByTagName(b)[0];
						        x.parentNode.insertBefore(s, x);
						    })(window,'gandrad','script',document,'//content.green-red.com/lib/display.js');
						    gandrad({siteid:12408,slot:38302});
						</script>
						<!-- End of G&R_728x90 -->
					</div>
					<!--blog-->
					<div class="row clearfix m_bottom_45 m_sm_bottom_35">
						<div class="col-lg-6 col-md-6 col-sm-12 m_sm_bottom_35 blog_animate animate_ftr">
							<div class="clearfix m_bottom_25 m_sm_bottom_20">
								<h2 class="tt_uppercase color_dark f_left">From The Blog</h2>
								<div class="f_right clearfix nav_buttons_wrap">
									<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left tr_delay_hover r_corners blog_prev"><i class="fa fa-angle-left"></i></button>
									<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners blog_next"><i class="fa fa-angle-right"></i></button>
								</div>
							</div>
							<!--blog carousel-->
							<div class="blog_carousel">
							<?php
							$type = 'post';
								$args=array(
								  'post_type' => $type,
								  'post_status' => 'publish',
								  'posts_per_page' => -1,
								  'caller_get_posts'=> 1
								  );

								$my_query = null;
								$my_query = new WP_Query($args);
								?>
							<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
								<div class="clearfix">
									<!--image-->
									<a href="#" class="d_block photoframe relative shadow wrapper r_corners f_left m_right_20 animate_ftt f_mxs_none m_mxs_bottom_10">
									<?php
									$thumb_id = get_post_thumbnail_id();
									$thumb_url = wp_get_attachment_image_src($thumb_id,'medium', true);
									//echo $thumb_url[0];
									?>
										<img class="lazy tr_all_long_hover"  data-original="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>">
									</a>
									<!--post content-->
									<div class="mini_post_content">
										<h4 class="m_bottom_5 animate_ftr"><a href="<?php echo get_permalink(); ?>" class="color_dark"><b><?php the_title(); ?></b></a></h4>
										<p class="f_size_medium m_bottom_10 animate_ftr">
										<?php echo $posted_on = sprintf(
										esc_html_x( 'Posted on %s', 'post date', 'biyerbazaar' ),
										'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'); ?>
									 <?php echo get_comments_number( $post_id ); ?> comments</p>
										<p class="m_bottom_10 animate_ftr"><?php the_excerpt (); ?></p>
										<a class="tt_uppercase f_size_large animate_ftr" href="<?php echo get_permalink(); ?>">Read More</a>
									</div>
								</div>
							<?php endwhile; ?>
								
							</div>
						</div>
						<!--testimonials-->
						<div class="col-lg-6 col-md-6 col-sm-12 ti_animate animate_ftr">
							<div class="clearfix m_bottom_25 m_sm_bottom_20">
								<h2 class="tt_uppercase color_dark f_left f_mxs_none m_mxs_bottom_15">What Our Customers Say</h2>
								<div class="f_right clearfix nav_buttons_wrap f_mxs_none">
									<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left tr_delay_hover r_corners ti_prev"><i class="fa fa-angle-left"></i></button>
									<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners ti_next"><i class="fa fa-angle-right"></i></button>
								</div>
							</div>
							<!--testimonials carousel-->
							<div class="testiomials_carousel">
							<?php
							$type = 'testmonial';
								$args=array(
								  'post_type' => $type,
								  'post_status' => 'publish',
								  );

								$tm_query = null;
								$tm_query = new WP_Query($args);
								?>
						<?php while ( $tm_query->have_posts() ) : $tm_query->the_post(); ?>
							<div>
								<blockquote class="r_corners shadow f_size_large relative m_bottom_15"><?php echo get_the_content(); ?></blockquote>
								<?php
								$thumb_id = get_post_thumbnail_id();
								$thumb_url = wp_get_attachment_image_src($thumb_id,'array(70, 70)', true);
								//echo $thumb_url[0];
								?>
								<img class="circle m_left_20 d_inline_middle animate_ftr" src="<?php echo $thumb_url[0]; ?>" width="70" height="70" alt="">
								<div class="d_inline_middle m_left_15 animate_ftr">
									<h5 class="color_dark"><b><?php echo the_title(); ?></b></h5>
									<p><?php echo rwmb_meta( 'testmonial_client_city', $args, $post_id ); ?></p>
								</div>
							</div>
							<?php endwhile; ?>
								
							</div>
						</div>
					</div>
					<!-- payment method -->
						<!--product brands-->
					<div class="clearfix m_bottom_25 m_sm_bottom_20">
						<h2 class="tt_uppercase color_dark f_left heading2 animate_fade f_mxs_none m_mxs_bottom_15">Payment Method</h2>
						<div class="f_right clearfix nav_buttons_wrap animate_fade f_mxs_none">
							<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners pb_prev"><i class="fa fa-angle-left"></i></button>
							<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners pb_next"><i class="fa fa-angle-right"></i></button>
						</div>
					</div>
					<div class=" m_bottom_45 m_sm_bottom_35">
					<img class="payment-mtd" src="http://www.biyerbazaar.com/wp-content/uploads/2016/10/Pay-Pal.png" alt="Pay Now by card">
					</div>
					<!--banners-->
					<div class="row clearfix">
						<div class="col-lg-4 col-md-4 col-sm-4">
							<a href="https://www.facebook.com/Biyerbazaarcom-362047313987644/" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners red t_align_c tt_uppercase vc_child n_sm_vc_child">
									<img class="d_inline_middle m_md_bottom_5" src="<?php echo bloginfo('template_directory'); ?>/banner/01.jpg" alt="">
									
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4">
							<a href="https://www.facebook.com/Biyerbazaarcom-362047313987644/" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners red t_align_c tt_uppercase vc_child n_sm_vc_child">
									<img class="d_inline_middle m_md_bottom_5" src="<?php echo bloginfo('template_directory'); ?>/banner/02.jpg" alt="">
									
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4">
							<a href="https://www.facebook.com/Biyerbazaarcom-362047313987644/" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners red t_align_c tt_uppercase vc_child n_sm_vc_child">
									<img class="d_inline_middle m_md_bottom_5" src="<?php echo bloginfo('template_directory'); ?>/banner/03.jpg" alt="">
									
							</a>
					</div>
				</div>
			</div>

<?php get_footer(); ?>