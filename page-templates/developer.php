<?php
/*
Template Name: Developer
*/


$data = get_userdata( get_current_user_id() );

if ( is_object( $data) ) {
	$current_user_caps = $data->allcaps;

	// print it to the screen
	echo ('<h1>Current User Capibalities</h1>');
	echo '<div><pre>' . print_r( $current_user_caps, true ) . '</pre></div>';
}



global $wp_filter;

echo '<div><pre>' . print_r($wp_filter, true ) . '</pre></div>';

