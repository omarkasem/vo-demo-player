<?php
/**
 * Plugin Name: VO Demo Player
 * Description: Customizable audio player with download option..
 * Version:     1.0.3
 * Author:      Voice Acting 101 
 * Author URI: https://voiceacting101.com/demo-player/
 * License:     GPL v3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'OK_CAPS_VERSION', '1.0.3' );
define( 'OK_CAPS_NAME', 'vo-demo-player' );
define( 'OK_CAPS_URL', plugin_dir_url( __FILE__ ) );
define( 'OK_CAPS_PATH', plugin_dir_path( __FILE__ ) );

define( 'OK_CAPS_ACF_SHOW', 0);
define( 'OK_CAPS_ACF_PATH', plugin_dir_path(__FILE__) . '/includes/acf/' );
define( 'OK_CAPS_ACF_URL', plugin_dir_url(__FILE__) . '/includes/acf/' );

require plugin_dir_path( __FILE__ ) . 'app/AudioPlayer.php';

require plugin_dir_path( __FILE__ ) . 'app/PostType.php';

require plugin_dir_path( __FILE__ ) . 'app/Acf.php';

require plugin_dir_path( __FILE__ ) . 'app/Playlist.php';

new OK_Circular_AudioPlayer_Shortcode();
