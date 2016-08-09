<?php if(!defined('ABSPATH')) die('Fatal Error');

define( 'DM_PLUGIN_TOOL_PSM_NAME', 'Post Search Metabox' );
define( 'DM_PLUGIN_TOOL_PSM_SLUG', 'post-search-metabox');
define( 'DM_PLUGIN_TOOL_PSM_PLUGIN_DIR',  __FILE__ );
define( 'DM_PLUGIN_TOOL_PSM_PLUGIN_URL',  __FILE__ );
define( 'DM_PLUGIN_TOOL_PSM_DEBUG' , true );

require_once DM_PLUGIN_TOOL_PSM_PLUGIN_DIR . 'lib/class-post-search-metabox.php';
