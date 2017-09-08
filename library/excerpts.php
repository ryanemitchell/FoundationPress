<?php
/**
 * Created by PhpStorm.
 * User: ryan
 * Date: 9/5/17
 * Time: 10:22 AM
 */


//change "Read More" text

function modify_read_more_link() {
	return '<a class="more-link" href="' . get_permalink() . '">Your Read More Link Text</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );


//change excerpt length

function new_excerpt_length($length) {
return 100;
}
add_filter('excerpt_length', 'new_excerpt_length');
