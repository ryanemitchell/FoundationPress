<?php
/**
 * Created by PhpStorm.
 * User: ryan
 * Date: 9/5/17
 * Time: 10:20 AM
 */
add_action('admin_init', 'my_remove_menu_elements', 102);

function my_remove_menu_elements()
{
	remove_submenu_page( 'themes.php', 'theme-editor.php' );
	remove_submenu_page( 'plugins.php','plugin-editor.php' );
}
