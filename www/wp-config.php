<?php

if ( file_exists( dirname( dirname( __FILE__ ) ) . '/wp-config-local.php' ) ) {
	// IMPORTANT: Ensure your local config does not include wp-settings.php
	require_once( dirname( dirname( __FILE__ ) ) . '/wp-config-local.php' );
}

// https://api.wordpress.org/secret-key/1.1/salt/

define( 'WP_HOME', 'http://' . APP_DOMAIN );
define( 'WP_SITEURL', 'http://' . APP_DOMAIN . '/cms' );

define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . APP_DOMAIN . '/content' );

if ( ! defined( 'DB_HOST' ) ) {
	define( 'DB_HOST', 'localhost' );
}

if ( ! defined( 'DB_CHARSET' ) ) {
	define( 'DB_CHARSET', 'utf8' );
}

if ( ! defined( 'DB_COLLATE' ) ) {
	define( 'DB_COLLATE', '' );
}

if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

if ( ! defined( 'DISALLOW_FILE_EDIT' ) ) {
	define( 'DISALLOW_FILE_EDIT', true );
}

if ( ! isset( $table_prefix ) ) {
	$table_prefix = 'wp_';
}

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/cms/' );
}

require_once( ABSPATH . 'wp-settings.php' );