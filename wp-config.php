<?php
/*****************************************************************/
define('DB_NAME', 		'');
define('DB_USER', 	 	'');
define('DB_PASSWORD', 		'');
define('DB_HOST', 	     	'localhost');
$table_prefix             	= 'siteid_';
/*****************************************************************/
date_default_timezone_set('Europe/London');
define('WP_HOME',               'https://' .$_SERVER['HTTP_HOST']. '');
define('WP_SITEURL',            'https://' .$_SERVER['HTTP_HOST']. '');
define('WP_CONTENT_DIR', 	dirname(__FILE__) . '/assets' );
define('WP_CONTENT_URL', 	'https://' .$_SERVER['HTTP_HOST']. '/assets' );
define('WPMU_PLUGIN_DIR', 	dirname(__FILE__) . '/assets/core');
define('WPMU_PLUGIN_URL', 	WP_SITEURL . '/assets/core');
define('COOKIE_DOMAIN', 	$_SERVER['HTTP_HOST']);
define('WP_POST_REVISIONS',     false);
define('EMPTY_TRASH_DAYS',      30);
define('WP_CACHE',              true);
define('ENABLE_CACHE',          true);
define('CONCATENATE_SCRIPTS',   true);
define('FORCE_SSL_ADMIN', 	true);
define('SCRIPT_DEBUG',          true);
define('WP_DEBUG', 		false);
define('WP_DEBUG_LOG', 		true);
define('WP_DEBUG_DISPLAY', 	false);
define('SAVEQUERIES', 		false);
define('WP_MEMORY_LIMIT', 	'128M');
define('DB_CHARSET'		'utf8');
define('DB_COLLATE', 	    	'');
define('WPLANG', 		'');
/*****************************************************************/
define('AUTH_KEY',         	'abcdefghijklmnopqrstuvwxyz');
define('SECURE_AUTH_KEY',  	'abcdefghijklmnopqrstuvwxyz');
define('LOGGED_IN_KEY',    	'abcdefghijklmnopqrstuvwxyz');
define('NONCE_KEY',        	'abcdefghijklmnopqrstuvwxyz');
define('AUTH_SALT',        	'abcdefghijklmnopqrstuvwxyz');
define('SECURE_AUTH_SALT', 	'abcdefghijklmnopqrstuvwxyz');
define('LOGGED_IN_SALT',   	'abcdefghijklmnopqrstuvwxyz');
define('NONCE_SALT',       	'abcdefghijklmnopqrstuvwxyz');
/*****************************************************************/
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');
