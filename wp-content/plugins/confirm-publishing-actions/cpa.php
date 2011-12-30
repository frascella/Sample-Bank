<?php
/*
Plugin Name: Confirm Publishing Actions
Plugin URI: http://www.codezilla.nl/wordpress/plugin/confirm-publishing-actions/
Description: Confirm Publishing Actions is a WordPress plugin that prompts a user to click a confirm (or cancel) button whenever he is trying to submit, publish, update or delete a WordPress post. Simple, lightweight, customizable and translation-ready.
Version: 1.1.2
Author: donutz
Author URI: http://www.codezilla.nl/
License: GPL2
Text Domain: pjh-cpa
Domain Path: /inc/lang
*/

/*  Copyright 2011  Peter J. Herrel  (email : codezilla.nl@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
* Changelog
* v 1.1.2
* Minified JS
* v 1.0
* Initial release
*/

/*################################################*/
/*########### CPA PLUGIN FOR WORDPRESS ###########*/
/*################################################*/

new CPA_Confirm_Publishing_Actions;

class CPA_Confirm_Publishing_Actions
{
	var $version = '1.1.2';
	var $plugin_dir_url = '';
	function CPA_Confirm_Publishing_Actions()
   	{
    	    $this->__construct();
    	}
	function __construct()
	{
		$this->plugin_dir_url = trailingslashit( plugins_url( dirname( plugin_basename( __FILE__ ) ) ) );
	        new CPA_Confirm_Publishing_Actions_Options;
		if ( is_admin() )
		{
			add_action( 'admin_enqueue_scripts', array( &$this, 'cpa_admin_scripts_enqueue' ) );
		}
    	}
	function init()
	{
		load_plugin_textdomain( 'pjh-cpa', false, $this->plugin_dir_url . 'inc/lang/' );
	}
	public function cpa_admin_scripts_enqueue( $hook )
	{
		if( 'index.php' == $hook || 'post.php' == $hook || 'post-new.php' == $hook || 'edit.php' == $hook )
		{
			wp_enqueue_script( 'cpa', $this->plugin_dir_url . 'inc/js/cpa.js', array( 'jquery' ), $this->version, true );
			if( 'index.php' == $hook )
			{
				$t = __( 'Post', 'pjh-cpa' );
			}
			else
			{
				global $post;
				$type = get_post_type_object( get_post_type($post) );
				$t = $type->labels->singular_name;
			}
			$d = sprintf(__( 'You are about to delete this %1$s. Proceed?', 'pjh-cpa' ), $t);
			$s = sprintf(__( 'You are about to submit this %1$s for review. Proceed?', 'pjh-cpa' ), $t);
			$p = sprintf(__( 'You are about to publish this %1$s. Proceed?', 'pjh-cpa' ), $t);
			$u = sprintf(__( 'You are about to update this %1$s. Proceed?', 'pjh-cpa' ), $t);
			$cpa_l10n_data = array( 
				'confirm_delete' => $d,
				'confirm_submit' => $s,
				'confirm_publish' => $p,
				'confirm_update' => $u
			);
			wp_localize_script( 'cpa', 'cpa_l10n_obj', $cpa_l10n_data );
		}
	}
}

class CPA_Confirm_Publishing_Actions_Options
{
	function CPA_Confirm_Publishing_Actions_Options()
	{
		$this->__construct();
	}
	function __construct()
	{
		$this->plugin_dir_url = trailingslashit( plugins_url( dirname( plugin_basename( __FILE__ ) ) ) );

		if ( is_admin() )
		{
			add_filter( 'plugin_row_meta', array( &$this, 'cpa_confirm_publishing_actions_register_plugin_links' ), 10, 2 );
		}
	}
	function cpa_confirm_publishing_actions_get_basename()
	{
		return plugin_basename( __FILE__ );
	}
	function cpa_confirm_publishing_actions_register_plugin_links( $links, $file )
	{
		$base = CPA_Confirm_Publishing_Actions_Options::cpa_confirm_publishing_actions_get_basename();
		if ( $file == $base )
		{
			$links[] = '<a href="http://www.codezilla.nl/wordpress/plugin/confirm-publishing-actions/">' . __( 'Documentation', 'pjh-cpa' ) . '</a>';
			$links[] = '<a href="http://www.codezilla.nl/wordpress/plugin/confirm-publishing-actions/">' . __( 'Support', 'pjh-cpa' ) . '</a>';
			$links[] = '<a href="http://www.codezilla.nl/donate/">' . __( 'Donate', 'pjh-cpa' ) . '</a>';
		}
		return $links;
	}
}

?>