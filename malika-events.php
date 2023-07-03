<?php
/**
* Plugin Name: Malika Events
* Plugin URI: https://github.com/Barissa-Imran/malika-events-plugin/
* Description: This plugin is used to create events for the malika wordpress theme.
* Version: 0.0.1
* Author: Barrylabs
* Author URI: https://github.com/Barissa-Imran/
* License: Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License
* License URI: http://creativecommons.org/licenses/by-nc-sa/4.0/
* Text Domain: malika-events
**/

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Plugin code

// Enqueue plugin scripts and styles
function malika_events_enqueue_scripts()
{
  // Enqueue necessary scripts and styles for the plugin
  wp_enqueue_style('malika-events-style', plugin_dir_url(__FILE__) . 'assets/css/malika-events.css', array(), '1.0.0', 'all');
  wp_enqueue_script('malika-events-script', plugin_dir_url(__FILE__) . 'assets/js/malika-events.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'malika_events_enqueue_scripts');

// Include plugin files
$malika_events_includes = array(
  'includes/post-type.php',
  'includes/taxonomy.php',
  'includes/meta-boxes.php',
  'includes/save-meta.php',
  'includes/active-event.php',
);

foreach ($malika_events_includes as $file) {
  if (!$filepath = plugin_dir_path(__FILE__) . $file) {
    trigger_error(sprintf('Error locating %s for inclusion', $file), E_USER_ERROR);
  }

  require_once $filepath;
}

// Plugin activation hook
function malika_events_activate()
{
  // Flush rewrite rules on activation
  flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'malika_events_activate');

// Plugin deactivation hook
function malika_events_deactivate()
{
  // Flush rewrite rules on deactivation
  flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'malika_events_deactivate');

?>






