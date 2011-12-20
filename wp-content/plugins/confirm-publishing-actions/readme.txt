=== Confirm Publishing Actions ===
Contributors: donutz
Donate link: http://www.codezilla.nl/donate/
Tags: publish, delete, update, submit, confirm, confirmation, quickpress, translation-ready
Requires at least: 3.1
Tested up to: 3.3
Stable tag: 1.0
License: GPLv2

Prompts a user to click a confirm button whenever he tries to submit, publish, update or delete a post.

== Description ==

Confirm Publishing Actions is a WordPress plugin that prompts a user to click a confirm (or cancel) button whenever he is trying to submit, publish, update or delete a WordPress post. Simple, lightweight, customizable and translation-ready.

Once activated, the plugin will intercept publishing actions on the following admin pages: `post.php`, `edit-post.php`, `edit.php` and `index.php` (QuickPress dashboard widget).

Living up to the latest WordPress coding standards, this plugin requires WordPress version 3.1 or higher.

Features in version 1.0 include:

* Localization support

== Installation ==

1. Unzip the download package
2. Upload the folder including all files and sub directories to the `/wp-content/plugins/` directory.
3. Activate the plugin through the WordPress Plugins menu
4. Done!

== Frequently Asked Questions ==

= Where is the settings page? = 

There are currently no settings to configure, however with a little php magic you'll be able to do some customization (see below in this FAQ).

If you think an administration panel is absolutely necessary for this plugin, please submit a feature request on the plugin homepage.

= How do I change the text of the dialogue? = 

You can use the [CodeStyling Localization](http://wordpress.org/extend/plugins/codestyling-localization/ "CodeStyling Localization") plugin (or any other translation tool) to modify the default text.

= How do I translate `%1$s`? What does it mean? =

`%1$s` is a placeholder that represents the singular name of a WordPress post type. You don't need to translate it, just copy and use it exactly as is.

= How do I change the look and feel of the dialog box? = 

You'll have to wait until the next release.

= How can I disable plugin functionality for the QuickPress widget? =

Paste the following code snippet in the `functions.php` file of your WordPress theme:

`function cpa_qp_dequeue( $hook )
{
	if ( is_plugin_active( 'confirm-publishing-actions/cpa.php' ) && class_exists( 'CPA_Confirm_Publishing_Actions' ) )
	{
		if( 'index.php' != $hook )
        		return;
		wp_dequeue_script( 'cpa' );
	}
	return;
}
add_action( 'admin_enqueue_scripts', 'cpa_qp_dequeue' );`

= How can I limit plugin functionality to a specific post type? =

With `get_post_type()`, a native WordPress function, you can enable or disable plugin functionality for specific post types (such as `post`, `page`, or any other post type). For example, to disable functionality for 'Pages', paste the following code snippet in the `functions.php` file of your WordPress theme:

`function cpa_pt_dequeue( $type )
{
	if ( is_plugin_active( 'confirm-publishing-actions/cpa.php' ) && class_exists( 'CPA_Confirm_Publishing_Actions' ) )
	{
		global $post;
		$type = get_post_type( $post );
		if( 'page' != $type )
			return;
       		wp_dequeue_script( 'cpa' );
	}
	return;
}
add_action( 'admin_enqueue_scripts', 'cpa_pt_dequeue' );`

= How can I limit plugin functionality to selected user roles? =

With `current_user_can()`, a native WordPress function, you can enable or disable functionality for specific user roles, based on the capabilities assigned to them. For example, to disable functionality for admins only, paste the following code snippet in the `functions.php` file of your WordPress theme:

`function cpa_cap_dequeue()
{
	if ( is_plugin_active( 'confirm-publishing-actions/cpa.php' ) && class_exists( 'CPA_Confirm_Publishing_Actions' ) )
	{
		if( ! current_user_can( 'manage_options' ) )
        		return;
		wp_dequeue_script( 'cpa' );
	}
	return;
}
add_action( 'admin_enqueue_scripts', 'cpa_cap_dequeue' );`

== Screenshots ==

1. Example of a confirmation dialogue.

== Changelog ==

= 1.0 =

* Initial release

== Upgrade Notice ==

= 1.0 =

Initial release

== Other Notes ==

= License =

The Confirm Publishing Actions plugin for WordPress is released under GPLv2, you can use it free of charge on your personal or commercial blog.

= Support =

Visit the [plugin homepage](http://www.codezilla.nl/wordpress/plugin/confirm-publishing-actions/ "plugin homepage") or find support at the [WordPress international forums](http://wordpress.org/support/forum/plugins-and-hacks/ "WordPress international forums").

= Donate =

If you like the Confirm Publishing Actions plugin and use it lot, please consider making a [donation](http://www.codezilla.nl/donate/ "donation"). Thanks!