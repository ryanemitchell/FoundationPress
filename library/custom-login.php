<?php


//add stylesheet
function seequs_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/dist/assets/css/custom-login-styles.css" />';
}
add_action('login_head', 'seequs_custom_login');

//change logo URL
function my_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
	return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );




