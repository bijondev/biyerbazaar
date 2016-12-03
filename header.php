
<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
	<head>
		<?php wp_head(); ?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!--meta info-->
		<meta name="author" content="">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="icon" type="image/ico" href="images/fav.ico">
		<!--stylesheet include-->

		<link rel="stylesheet" type="text/css" media="all" href="<?php echo bloginfo('template_directory'); ?>/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo bloginfo('template_directory'); ?>/css/camera.css">
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo bloginfo('template_directory'); ?>/css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo bloginfo('template_directory'); ?>/css/owl.transitions.css">
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo bloginfo('template_directory'); ?>/css/jquery.custom-scrollbar.css">
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo bloginfo('template_directory'); ?>/css/style.css">
		<!--font include-->
		<link href="<?php echo bloginfo('template_directory'); ?>/css/font-awesome.min.css" rel="stylesheet">
		<script src="<?php echo bloginfo('template_directory'); ?>/js/modernizr.js"></script>
		<script src="<?php echo bloginfo('template_directory'); ?>/js/jquery.lazyload.min.js"></script>
		<script type="text/javascript">
		jQuery.noConflict();
			jQuery( document ).ready(function( $ ) {
			    $("img.lazy").lazyload();
			});
		</script>
		<?php wp_head(); ?>
	</head>
	<body  <?php body_class(); ?> >
		
		<!--boxed layout-->
		<div class="boxed_layout relative w_xs_auto woocommerce">
			<!--[if (lt IE 9) | IE 9]>
				<div style="background:#fff;padding:8px 0 10px;">
				<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix" style="padding:9px 0 0;float:left;width:83%;"><i class="fa fa-exclamation-triangle scheme_color f_left m_right_10" style="font-size:25px;color:#e74c3c;"></i><b style="color:#e74c3c;">Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:16%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_4 r_corners bg_scheme_color color_light d_inline_b t_align_c" target="_blank" style="margin-bottom:2px;">Update Now!</a></div></div></div></div>
			<![endif]-->
			<!--markup header-->
			<header role="banner">
				<!--header top part-->
				<section class="h_top_part">
					<div class="container">
						<div class="row clearfix">
							<div class="col-lg-4 col-md-4 col-sm-5 t_xs_align_c">
								<p class="f_size_small">Welcome visitor can you	
								<?php
								 if (is_user_logged_in()) {
							        echo '<a href="'. wp_logout_url() .'">Log Out</a>';
							    }
							    elseif (!is_user_logged_in()) {
							        echo '<a href="'. site_url() .'/wp-login.php">Log In</a> or <a href="'.site_url().'/wp-login.php?action=register">Create an Account</a>';
							    }
							    ?>
								 </p>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-2 t_align_c t_xs_align_c">
								<p class="f_size_small">Call us toll free: <b class="color_dark">(+88) 01709 932 701,(+88) 01716301000, 10 AM to 8 PM (Everyday)</b></p>
							</div>
							<nav class="col-lg-4 col-md-4 col-sm-5 t_align_r t_xs_align_c">
								<ul class="d_inline_b horizontal_list clearfix f_size_small users_nav">
									<li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id')); ?>" class="default_t_color">My Account</a></li>
									<li><a href="<?php echo WC()->cart->get_cart_url(); ?>" class="default_t_color">Orders List</a></li>
									<li><a href="<?php echo wc()->cart->get_checkout_url(); ?>" class="default_t_color">Checkout</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</section>
				<!--header bottom part-->
				<section class="h_bot_part container">
					<div class="clearfix row">
						<div class="col-lg-3 col-md-3 col-sm-4 t_xs_align_c">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo m_xs_bottom_15 d_xs_inline_b">
								<img src="<?php echo bloginfo('template_directory'); ?>/images/logo1.png" alt="">
							</a>
						</div>
						<div class="col-md-5 com-lg-5 col-sm-12 col-xs-12">
							<!-- G&R_468x60 -->
							<script id="GNR38301">
							    (function (i,g,b,d,c) {
							        i[g]=i[g]||function(){(i[g].q=i[g].q||[]).push(arguments)};
							        var s=d.createElement(b);s.async=true;s.src=c;
							        var x=d.getElementsByTagName(b)[0];
							        x.parentNode.insertBefore(s, x);
							    })(window,'gandrad','script',document,'//content.green-red.com/lib/display.js');
							    gandrad({siteid:12408,slot:38301});
							</script>
							<!-- End of G&R_468x60 -->
						</div>
						<div class="col-lg-4 col-md-4 col-sm-8 t_align_r t_xs_align_c">
							<ul class="d_inline_b horizontal_list clearfix t_align_l site_settings">
								<!--like-->
								<li>
									<img src="http://www.biyerbazaar.com/wp-content/uploads/2016/10/basis.jpg" alt="Pay Now by card" width="150">
								</li>
								<li>
									<a role="button" href="#" class="button_type_1 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none"><i class="fa fa-heart-o f_size_ex_large"></i><span class="count circle t_align_c">12</span></a>
								</li>

								<!--shopping cart-->
								<li class="m_left_5 relative container3d" id="shopping_button">
									<a role="button" href="#" class="button_type_3 color_light bg_scheme_color d_block r_corners tr_delay_hover box_s_none">
										<span class="d_inline_middle shop_icon m_mxs_right_0">
											<i class="fa fa-shopping-cart"></i>
											<span class="count tr_delay_hover type_2 circle t_align_c">
											<?php echo $count = WC()->cart->cart_contents_count; ?></span>
										</span>
										<b class="d_mxs_none"><?php echo WC()->cart->get_cart_total(); ?></b>
									</a>
									<div class="shopping_cart top_arrow tr_all_hover r_corners">
										<div class="f_size_medium sc_header">Recently added item(s)</div>
										<ul class="products_list">
										<?php
    global $woocommerce;
    $items = $woocommerce->cart->get_cart();
    //print_r($items);

        foreach($items as $item => $values) { 
            $_product = $values['data']->post;
            //product image
            $getProductDetail = wc_get_product( $values['product_id'] );
            //echo $getProductDetail->get_image(); // accepts 2 arguments ( size, attr )

            //echo "<b>".$_product->post_title.'</b>  <br> Quantity: '.$values['quantity'].'<br>'; 
            //$price = get_post_meta($values['product_id'] , '_price', true);
           // echo "  Price: ".$price."<br>";
            /*Regular Price and Sale Price*/
            //echo "Regular Price: ".get_post_meta($values['product_id'] , '_regular_price', true)."<br>";
            //echo "Sale Price: ".get_post_meta($values['product_id'] , '_sale_price', true)."<br>";
            //get_the_post_thumbnail( $values['product_id'], array(60,60) );
            $thumb_id = get_post_thumbnail_id($values['product_id']);
			$thumb_url = wp_get_attachment_image_src($thumb_id,array(60,60), true);
            ?>
<li>
												<div class="clearfix">
													<!--product image-->
													<img class="f_left m_right_10" src="<?php echo $thumb_url[0]; ?>" width="60" alt="">
													<!--product description-->
													<div class="f_left product_description">
														<a href="#" class="color_dark m_bottom_5 d_block"><?php echo $_product->post_title; ?></b></a>
														<span class="f_size_medium">Product Code PS34</span>
													</div>
													<!--product price-->
													<div class="f_left f_size_medium">
														<div class="clearfix">
															<?php echo $values['quantity']; ?> x <b class="color_dark"><?php echo get_post_meta($values['product_id'] , '_sale_price', true); ?></b>
														</div>
														<button class="close_product color_dark tr_hover"><i class="fa fa-times"></i></button>
													</div>
												</div>
											</li>
            <?php
        }
?>
											
										
										</ul>
										<!--total price-->
										<ul class="total_price bg_light_color_1 t_align_r color_dark">
											<li class="m_bottom_10">Tax: <span class="f_size_large sc_price t_align_l d_inline_b m_left_15">0.00</span></li>
											<li class="m_bottom_10">Discount: <span class="f_size_large sc_price t_align_l d_inline_b m_left_15"><?php echo wc()->cart->discount_total; ?></span></li>
											<li>Total: <b class="f_size_large bold scheme_color sc_price t_align_l d_inline_b m_left_15"><?php echo WC()->cart->get_cart_total(); ?></b></li>
										</ul>
										<div class="sc_footer t_align_c">
											<a href="<?php echo WC()->cart->get_cart_url(); ?>" role="button" class="button_type_4 d_inline_middle bg_light_color_2 r_corners color_dark t_align_c tr_all_hover m_mxs_bottom_5">View Cart</a>
											<a href="<?php echo wc()->cart->get_checkout_url(); ?>" role="button" class="button_type_4 bg_scheme_color d_inline_middle r_corners tr_all_hover color_light">Checkout</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</section>
				<!--main menu container-->
				<section class="menu_wrap relative">
					<div class="container clearfix">
						<!--button for responsive menu-->
						<button id="menu_button" class="r_corners centered_db d_none tr_all_hover d_xs_block m_bottom_10">
							<span class="centered_db r_corners"></span>
							<span class="centered_db r_corners"></span>
							<span class="centered_db r_corners"></span>
						</button>
						<!--main menu-->
						<nav role="navigation" class="f_left f_xs_none d_xs_none">	
						 <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
            )
            );
        ?>
        </nav>
						<button class="f_right search_button tr_all_hover f_xs_none d_xs_none">
							<i class="fa fa-search"></i>
						</button>
					</div>
					<!--search form-->
					<div class="searchform_wrap tf_xs_none tr_all_hover">
						<div class="container vc_child h_inherit relative">
							<form role="search" class="d_inline_middle full_width">
								<input type="text" name="search" placeholder="Type text and hit enter" class="f_size_large">
							</form>
							<button class="close_search_form tr_all_hover d_xs_none color_dark">
								<i class="fa fa-times"></i>
							</button>
						</div>
					</div>
				</section>
			</header>