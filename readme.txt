=== Plugin Name ===
Contributors: sanjayabhai
Tags: loadmore, ajax loadmore, post loadmore
Requires at least: 4.6
Tested up to: 4.7
Stable tag: 4.3
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Here is a short description of the plugin.  This should be no more than 150 characters.  No markup here.

== Description ==

How to use?
It have it's own shotcode. You can use the shortcode in any page, content, post, anyway whereever you want. 

For page, post: 
[loadmore_nav taxonomy="category"]
* Loads category list . use taxonomy = "taxonomy used in post type" by default it's "category"

[loadmore_template post_type="piper"]
* Loads template container and ajax scripts

[loadmore_button]
* show load more button is post page is more that one.

And for PHP template : 
<?php echo  do_shortcode('[loadmore_nav taxonomy="category"]'); ?>
<?php echo  do_shortcode('[loadmore_template post_type="piper"]'); ?>
<?php echo  do_shortcode('[loadmore_button]'); ?>

Load more will show when you post is more than 10. 

Pro version coming soon. 

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload the plugin files to the `/wp-content/plugins/wp-load-more-post` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Follow the steps from description tab



== Frequently Asked Questions ==

= Can i use it for custom post type ? =

Yes you can use it for custom post type too. Just replace the "piper" from shortcode [loadmore_template post_type="piper"] with your custom post type.

== Screenshots ==
/assets/screen1.png