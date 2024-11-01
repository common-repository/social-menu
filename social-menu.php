<?php
/**
 * Plugin Name: Social Menu
 * Plugin URI:  https://github.com/seothemes/social-menu
 * Description: Displays a social menu with icons.
 * Version:     0.1.0
 * Author:      SEO Themes
 * Author URI:  https://seothemes.com
 * Text Domain: social-menu
 * License:     GPL-3.0-or-later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 *
 * @package   SocialMenu
 * @author    SEO Themes <seothemeswp@gmail.com>
 * @license   GPL-3.0-or-later
 * @link      https://seothemes.com
 * @copyright 2019 SEO Themes
 */

namespace SocialMenu;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\load_styles' );
/**
 * Load plugin styles.
 *
 * @since 1.0.0
 *
 * @todo  Clean up CSS for official release.
 *
 * @return void
 */
function load_styles() {
	wp_enqueue_style(
		'social-menu',
		plugin_dir_url( __FILE__ ) . 'style.css',
		[],
		'0.1.0',
		'all'
	);
}
