<?php
/**
 * Created by PhpStorm.
 * User: ryan
 * Date: 9/5/17
 * Time: 10:25 AM
 */

function wpb_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );

	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'wpb_imagelink_setup', 10);
