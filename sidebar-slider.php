
			<!--slider-->
			<div class="camera_wrap m_bottom_0">
			<?php
							$type = 'cs-slider';
								$args=array(
								  'post_type' => $type,
								  'post_status' => 'publish',
								  'meta_key' => 'slider_order',
								    'orderby' => 'slider_order',
								    'order' => 'asc'
								  );

								$tm_query = null;
								$tm_query = new WP_Query($args);
								?>
						<?php while ( $tm_query->have_posts() ) : $tm_query->the_post(); ?>
							<?php
									$thumb_id = get_post_thumbnail_id();
									$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
									//echo $thumb_url[0];
									?>
							
				<div data-src="<?php echo $thumb_url[0]; ?>" data-custom-thumb="<?php echo $thumb_url[0]; ?>">
					<!--<div class="camera_caption_1 fadeFromTop t_align_c d_xs_none">
						<div class="f_size_large color_light tt_uppercase slider_title_3 m_bottom_5">Meet New Theme</div>
						<hr class="slider_divider d_inline_b m_bottom_5">
						<div class="color_light slider_title tt_uppercase t_align_c m_bottom_45 m_sm_bottom_20"><b>Attractive &amp; Elegant<br>HTML Theme</b></div>
						<div class="color_light slider_title_2 m_bottom_45">$<b>15.00</b></div>
						<a href="http://themeforest.net/item/flatastic-ecommerce-html-template/7221813?ref=mad_velikorodnov" role="button" class="tr_all_hover button_type_4 bg_scheme_color color_light r_corners tt_uppercase">Buy Now</a>
					</div>-->
				</div>
				<?php endwhile; ?>


			</div>