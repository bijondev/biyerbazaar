<!--markup footer-->
			<footer id="footer">
				<div class="footer_top_part">
					<div class="container">
						<div class="row clearfix">
							<div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
								<h3 class="color_light_2 m_bottom_20">About</h3>
								<p class="m_bottom_25">Biyer Bazaar is a complete online wedding planning and shopping solution portal. As wedding is the biggest celebration of your life we are providers of exclusive support and product services with ease of access.</p>
								<!--social icons-->
								<ul class="clearfix horizontal_list social_icons">
									<li class="facebook m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Facebook</span>
										<a href="https://www.facebook.com/Biyerbazaarcom-362047313987644/" class="r_corners t_align_c tr_delay_hover f_size_ex_large">
											<i class="fa fa-facebook"></i>
										</a>
									</li>
									<!-- <li class="twitter m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Twitter</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-twitter"></i>
										</a>
									</li> -->
									<!-- <li class="google_plus m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Google Plus</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-google-plus"></i>
										</a>
									</li> -->
									<!-- <li class="rss m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Rss</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-rss"></i>
										</a>
									</li> -->
									<!-- <li class="pinterest m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Pinterest</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-pinterest"></i>
										</a>
									</li> -->
									<!-- <li class="instagram m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Instagram</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-instagram"></i>
										</a>
									</li> -->
									<!-- <li class="linkedin m_bottom_5 m_sm_left_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">LinkedIn</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-linkedin"></i>
										</a>
									</li> -->
									<!-- <li class="vimeo m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Vimeo</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-vimeo-square"></i>
										</a>
									</li> -->
									<!-- <li class="youtube m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Youtube</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-youtube-play"></i>
										</a>
									</li> -->
									<!-- <li class="flickr m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Flickr</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-flickr"></i>
										</a>
									</li> -->
									<!-- <li class="envelope m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Contact Us</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-envelope-o"></i>
										</a>
									</li> -->
								</ul>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
								<h3 class="color_light_2 m_bottom_20">The Service</h3>
								<?php wp_nav_menu( array( 'theme_location' => 'footer1', 
								'menu_id' => 'navigation',
								'container' =>"",
								'menu_class'=>'vertical_list' ) ); ?>

								<!-- <ul class="vertical_list">
									<li><a class="color_light tr_delay_hover" href="#">My account<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Order history<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Wishlist<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Vendor contact<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Front page<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Virtuemart categories<i class="fa fa-angle-right"></i></a></li>
								</ul> -->
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
								<h3 class="color_light_2 m_bottom_20">Catagory</h3>
								<?php wp_nav_menu( array( 'theme_location' => 'footer2', 
								'menu_id' => 'navigation',
								'container' =>"",
								'menu_class'=>'vertical_list',
								//'walker' => new Walker_Simple_Example()
									 ) ); ?>
								<!-- <ul class="vertical_list">
									<li><a class="color_light tr_delay_hover" href="#">About us<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">New collection<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Best sellers<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Manufacturers<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Privacy policy<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Terms &amp; condition<i class="fa fa-angle-right"></i></a></li>
								</ul> -->
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3">
								<h3 class="color_light_2 m_bottom_20">Newsletter</h3>
								<p class="f_size_medium m_bottom_15">Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
								<form id="newsletter">
									<input type="email" placeholder="Your email address" class="m_bottom_20 r_corners f_size_medium full_width" name="newsletter-email">
									<button type="submit" class="button_type_8 r_corners bg_scheme_color color_light tr_all_hover">Subscribe</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!--copyright part-->
				<div class="footer_bottom_part">
					<div class="container clearfix t_mxs_align_c">
						<p class="f_left f_mxs_none m_mxs_bottom_10">&copy; 2016 <span class="color_light">biyerbazaar.com</span>. All Rights Reserved.</p>
						<ul class="f_right horizontal_list clearfix f_mxs_none d_mxs_inline_b">
							<li>
								<!-- Start of SimpleHitCounter Code -->
								visitors:
<div align="center"><a href="http://www.simplehitcounter.com" target="_blank"><img src="http://simplehitcounter.com/hit.php?uid=2105775&f=16777215&b=0" border="0" height="18" width="83" alt="web counter"></a></div>
<!-- End of SimpleHitCounter Code -->
							</li>
						</ul>
					</div>
				</div>
			</footer>
		</div>
		<?php include "social-wedget.php"; ?>
		<!--login popup-->
		<div class="popup_wrap d_none" id="login_popup">
			<section class="popup r_corners shadow">
				<button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
			  <h3 class="m_bottom_20 color_dark">Log In</h3>
				<form>
					<ul>
						<li class="m_bottom_15">
							<label for="username" class="m_bottom_5 d_inline_b">Username</label><br>
							<input type="text" name="" id="username" class="r_corners full_width">
						</li>
						<li class="m_bottom_25">
							<label for="password" class="m_bottom_5 d_inline_b">Password</label><br>
							<input type="password" name="" id="password" class="r_corners full_width">
						</li>
						<li class="m_bottom_15">
							<input type="checkbox" class="d_none" id="checkbox_10"><label for="checkbox_10">Remember me</label>
						</li>
						<li class="clearfix m_bottom_30">
							<button class="button_type_4 tr_all_hover r_corners f_left bg_scheme_color color_light f_mxs_none m_mxs_bottom_15">Log In</button>
							<div class="f_right f_size_medium f_mxs_none">
								<a href="#" class="color_dark">Forgot your password?</a><br>
								<a href="#" class="color_dark">Forgot your username?</a>
							</div>
						</li>
					</ul>
				</form>
				<footer class="bg_light_color_1 t_mxs_align_c">
					<h3 class="color_dark d_inline_middle d_mxs_block m_mxs_bottom_15">New Customer?</h3>
					<a href="#" role="button" class="tr_all_hover r_corners button_type_4 bg_dark_color bg_cs_hover color_light d_inline_middle m_mxs_left_0">Create an Account</a>
				</footer>
			</section>
		</div>
		<?php //include "product/quick-view.php"; ?>
		<button class="t_align_c r_corners tr_all_hover animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>
		<?php wp_footer(); ?>
		<!--scripts include-->
		<script src="<?php echo bloginfo('template_directory'); ?>/js/jquery-2.1.0.min.js"></script>
		<script src="<?php echo bloginfo('template_directory'); ?>/js/jquery-migrate-1.2.1.min.js"></script>
		<script src="<?php echo bloginfo('template_directory'); ?>/js/retina.js"></script>
		<script src="<?php echo bloginfo('template_directory'); ?>/js/camera.min.js"></script>
		<script src="<?php echo bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
		<script src="<?php echo bloginfo('template_directory'); ?>/js/waypoints.min.js"></script>
		<script src="<?php echo bloginfo('template_directory'); ?>/js/jquery.isotope.min.js"></script>
		<script src="<?php echo bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
		<script src="<?php echo bloginfo('template_directory'); ?>/js/jquery.tweet.min.js"></script>
		<script src="<?php echo bloginfo('template_directory'); ?>/js/jquery.custom-scrollbar.js"></script>
		<script src="<?php echo bloginfo('template_directory'); ?>/js/scripts.js"></script>
		
	</body>
</html>