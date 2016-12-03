<!--custom popup-->
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
		<div class="popup_wrap d_none" id="<?php echo $post->post_name;?>">
			<section class="popup r_corners shadow">
				<button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
		  <div class="clearfix">
					<div class="custom_scrollbar">
						<!--left popup column-->
						<div class="f_left half_column">
							<div class="relative d_inline_b m_bottom_10 qv_preview">
								<span class="hot_stripe"><img src="<?php echo bloginfo('template_directory'); ?>/images/sale_product.png" alt=""></span>
								<?php
									global $product;
 									$attachment_ids = $product->get_gallery_attachment_ids();
									//print_r($attachment_ids);
									$image_id=$attachment_ids[0];
									$image_singel= wp_get_attachment_url( $image_id, array(360,360) );
									
									?>

								<img data-original="<?php echo $image_singel; ?>"" class="lazy tr_all_hover" alt="">
							</div>
							<!--carousel-->
							<div class="relative qv_carousel_wrap m_bottom_20">
								<button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_prev">
									<i class="fa fa-angle-left "></i>
								</button>
								<ul class="qv_carousel d_inline_middle">
								<?php
									global $product;
 									$attachment_ids = $product->get_gallery_attachment_ids();
									//print_r($attachment_ids);
									//echo $thumb_url[0];
									foreach( $attachment_ids as $attachment_id ) 
											{
											  $image_small= wp_get_attachment_url( $attachment_id, "thumbnail" );
											  $image_medium= wp_get_attachment_url( $attachment_id, array(360,360) );
												echo "<li data-src='$image_medium'><img class='zazy' data-original='$image_small' alt=''></li>";
											}
									?>

								</ul>
								<button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_next">
									<i class="fa fa-angle-right "></i>
								</button>
							</div>
							<div class="d_inline_middle">Share this:</div>
							<div class="d_inline_middle m_left_5">
								<!-- AddThis Button BEGIN -->
								<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
								<a class="addthis_button_preferred_1"></a>
								<a class="addthis_button_preferred_2"></a>
								<a class="addthis_button_preferred_3"></a>
								<a class="addthis_button_preferred_4"></a>
								<a class="addthis_button_compact"></a>
								<a class="addthis_counter addthis_bubble_style"></a>
								</div>
								<!-- AddThis Button END -->
							</div>
						</div>
						<!--right popup column-->
						<div class="f_right half_column">
							<!--description-->
							<h2 class="m_bottom_10"><a href="#" class="color_dark fw_medium"><?php the_title(); ?></a></h2>
							<div class="m_bottom_10">
								<!--rating-->
								<ul class="horizontal_list d_inline_middle type_2 clearfix rating_list tr_all_hover">
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
								<a href="#" class="d_inline_middle default_t_color f_size_small m_left_5">1 Review(s) </a>
							</div>
							<hr class="m_bottom_10 divider_type_3">
							<table class="description_table m_bottom_10">
								<tr>
									<td>Manufacturer:</td>
									<td><a href="#" class="color_dark">Chanel</a></td>
								</tr>
								<tr>
									<td>Availability:</td>
									<td><span class="color_green">in stock</span> 20 item(s)</td>
								</tr>
								<tr>
									<td>Product Code:</td>
									<td>PS06</td>
								</tr>
							</table>

							<hr class="divider_type_3 m_bottom_10">
							<p class="m_bottom_10"><?php
									the_excerpt(); 
									?></p>
							<hr class="divider_type_3 m_bottom_15">
							<div class="m_bottom_15">
								<s class="v_align_b f_size_ex_large">
								<?php if (get_post_meta( get_the_ID(), '_regular_price', true)) { ?>
								<?php echo get_woocommerce_currency_symbol().get_post_meta( get_the_ID(), '_regular_price', true); ?></s>
								<?php } ?>
								<?php
										if (get_post_meta( get_the_ID(), '_sale_price', true)) {
											?>
								<span class="v_align_b f_size_big m_left_5 scheme_color fw_medium">
								<?php echo get_woocommerce_currency_symbol().get_post_meta( get_the_ID(), '_sale_price', true); ?></span>
								<?php } ?>
							</div>
							<table class="description_table type_2 m_bottom_15">

	
							</table>
							<div class="clearfix m_bottom_15">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>?add-to-cart=<?php echo $post->ID; ?>" class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover f_left f_size_large">Add to Cart</a>
								
								<button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0 relative"><i class="fa fa-question-circle f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Ask a Question</span></button>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<?php endwhile; ?>
						     <?php wp_reset_postdata(); ?>
						     <?php else:  ?>
						     <li>
						          <?php _e( 'No Products' ); ?>
						     </li>
						     <?php endif; ?>