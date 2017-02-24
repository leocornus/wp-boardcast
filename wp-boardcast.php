<?php
/*
Plugin Name: WP Boardcast
Plugin URI: http://www.github.com/leocornus/wp-boardcast
Description: A WordPress plugin to manage and show boardcast messages
Version: 0.0.1
Author: Sean Chen <sean.chen@leocorn.com>
Author URI: http://www.leocorn.com
License: GPLv2
*/

// figure out the plugin path .This will work for symlink path too.
$my_plugin_file = __FILE__;
define('WPB_PLUGIN_FILE', $my_plugin_file);
define('WPB_PLUGIN_PATH', WP_PLUGIN_DIR.'/'.basename(dirname($my_plugin_file)));

require_once(WPB_PLUGIN_PATH . '/admin/index.php');
require_once(WPB_PLUGIN_PATH . '/toolbar/index.php');
