<?php
/*
 * @wordpress-plugin
 * Plugin URI: Plugins Web Page URL
 * Plugin Name:       WP Load More
 * Description:       A wordpress load more posts plugin lite version
 * Version:           1.0
 * Author:            Sanjaya Dulal
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-load-more
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}
$plugin_url = plugins_url('', __FILE__);

$purl = plugin_dir_url(__FILE__);
$pdir = plugin_dir_path(__FILE__);

/**
 * The code that runs during plugin activation.
 */
require_once plugin_dir_path(__FILE__) . 'includes/class-wp-load-more-activator.php';

/**
 * The code that runs during plugin deactivation.
 */
require_once plugin_dir_path(__FILE__) . 'includes/class-wp-load-more-deactivator.php';

register_activation_hook(__FILE__, array('Load_More_Activator', 'activate'));

register_deactivation_hook(__FILE__, array('Load_More_Deactivator', 'deactivate'));

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require_once plugin_dir_path(__FILE__) . 'includes/class-wp-load-more.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.1.5
 */
function run_wp_load_more()
{
    $plugin = new Load_More();
    $plugin->run();

}

run_wp_load_more();

//add ajaxurl on frontend

add_action('wp_head', 'pluginname_ajaxurl');
function pluginname_ajaxurl()
{
    ?>
<script type="text/javascript">
var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
</script>
<?php
}

/**
 * Enqueue scripts
 *
 * @param string $handle Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of script names on which this script depends
 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
 */
function plugin_footer_script()
{
    wp_enqueue_script('jquery', false, array(), false, false);
    wp_enqueue_style('loadmore-css', plugins_url('/assets/css.css', __FILE__), '', '', '');
    wp_enqueue_style('loadmore-css');
}
add_filter('wp_footer', 'plugin_footer_script');
