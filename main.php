<?php
/*
Plugin Name: Perfect Plugin Picker
Plugin URI: http://JoeAnzalone.com/plugins/perfect-plugin-picker/
Description: Displays the number of ratings a plugin has received without having to hover over the stars in your site's admin panel when browsing for plugins.
Author: Joe Anzalone
Version: 0.6
Author URI: http://JoeAnzalone.com
*/

class shmit_perfect_plugin_picker {

	function admin_head_action(){
		wp_enqueue_style( 'perfect_plugin_picker_main', $this->plugin_dir . 'main.css' );
	}
	
	function __construct(){
		$this->plugin_dir = plugin_dir_url( __FILE__ );
		add_action('admin_head-plugin-install.php', array($this, 'admin_head_action'));
	}

}


new shmit_perfect_plugin_picker;