<?php
 /*
 Plugin Name: Add Copyright Message
 Plugin URI: https://github.com/w3programmers/add-copyright-message
 Description: Adding Copyright Message to  WordPress Footer
 Version: 1.0
 Author: Masud Alam
 Author URI: http://w3programmers.com/bangla
 License: GPLv2
 */

add_action('plugins_loaded','add_copyright_message_plugin_setup');

function add_copyright_message_plugin_setup(){
    add_action('wp_footer', 'add_copyright_message');
}

function add_copyright_message(){
	echo '<p style="text-align:center">COPYRIGHT &copy 2020 W3PROGRAMMERS.COM BANGLA</p>';
}
 
