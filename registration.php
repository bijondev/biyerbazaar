<?php
add_action( 'register_form', 'adding_custom_registration_fields' );
function adding_custom_registration_fields( ) {

	//lets make the field required so that i can show you how to validate it later;
	$firstname = empty( $_POST['firstname'] ) ? '' : $_POST['firstname'];
	$lastname  = empty( $_POST['lastname'] ) ? '' : $_POST['lastname'];
	$phone = empty( $_POST['phone'] ) ? '' : $_POST['phone'];
	?>
	<div class="form-row form-row-wide">
		<label for="reg_firstname"><?php _e( 'First Name', 'woocommerce' ) ?><span class="required">*</span></label>
		<input type="text" class="input-text" name="firstname" id="reg_firstname" size="30" value="<?php echo esc_attr( $firstname ) ?>" />
	</div>
	<div class="form-row form-row-wide">
		<label for="reg_lastname"><?php _e( 'Last Name', 'woocommerce' ) ?><span class="required">*</span></label>
		<input type="text" class="input-text" name="lastname" id="reg_lastname" size="30" value="<?php echo esc_attr( $lastname ) ?>" />
	</div>
	<div class="form-row form-row-wide">
		<label for="reg_phone"><?php _e( 'Phone', 'woocommerce' ) ?><span class="required">*</span></label>
		<input type="text" class="input-text" name="phone" id="reg_phone" size="10" value="<?php echo esc_attr( $phone ) ?>" />
	</div>
	<div class="form-row form-row-wide">
		<label for="reg_phone"><?php _e( 'Profile Image', 'woocommerce' ) ?></label>
						<img class="user-preview-image" src="<?php echo esc_attr( get_the_author_meta( 'sidebarimage', $user->ID ) ); ?>">

				<input type="text" name="sidebarimage" id="sidebarimage" value="<?php echo esc_attr( get_the_author_meta( 'sidebarimage', $user->ID ) ); ?>" class="regular-text" />
				<input type='button' class="button-primary" value="Upload Image" id="sidebarUploadimage"/><br />

				<span class="description">Please upload an image for the sidebar.</span>
	</div>
	<script type="text/javascript">
		(function( $ ) {
			$( '#uploadimage' ).on( 'click', function() {
				tb_show('test', 'media-upload.php?type=image&TB_iframe=1');

				window.send_to_editor = function( html ) 
				{
					imgurl = $( 'img',html ).attr( 'src' );
					$( '#image' ).val(imgurl);
					tb_remove();
				}

				return false;
			});

			$( 'input#sidebarUploadimage' ).on('click', function() {
				tb_show('', 'media-upload.php?type=image&TB_iframe=true');

				window.send_to_editor = function( html ) 
				{
					imgurl = $( 'img', html ).attr( 'src' );
					$( '#sidebarimage' ).val(imgurl);
					tb_remove();
				}

				return false;
			});
		})(jQuery);
	</script>
	<?php
}

//Validation registration form  after submission using the filter registration_errors
add_filter( 'woocommerce_registration_errors', 'registration_errors_validation' );

/**
 * @param WP_Error $reg_errors
 *
 * @return WP_Error
 */
function registration_errors_validation( $reg_errors ) {

	if ( empty( $_POST['firstname'] ) || empty( $_POST['lastname'] ) || empty( $_POST['phone']) ) {
		$reg_errors->add( 'empty required fields', __( 'Please fill in the required fields.', 'woocommerce' ) );
	}

	return $reg_errors;
}

//Updating use meta after registration successful registration
add_action('woocommerce_created_customer','adding_extra_reg_fields');

function adding_extra_reg_fields($user_id) {
	extract($_POST);
	update_user_meta($user_id, 'first_name', $firstname);
	update_user_meta($user_id, 'last_name', $lastname);
	update_user_meta($user_id, 'phone', $phone);
	update_user_meta($user_id, 'billing_first_name', $firstname);
	update_user_meta($user_id, 'shipping_first_name', $firstname);
	update_user_meta($user_id, 'billing_last_name', $lastname);
	update_user_meta($user_id, 'shipping_last_name', $lastname);
	update_user_meta($user_id, 'billing_phone', $phone);
}
?>