<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Dumpz' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'EIX0HiUMH2JWMagIg1d5FVqiFCvS9SiPsp8MDZMkRM2yHouDNlKW6NJ3yRECnGr4' );
define( 'SECURE_AUTH_KEY',  'minzRllFYcY0aCqxFsn7lDVeNJJ3lGNq1OzoBXb2tBNAJbMJDWMuQ8dTwex0qPsJ' );
define( 'LOGGED_IN_KEY',    'K2r4hcoJZPIldSMa0QhCTEIeV70SwYgzdPsjXtsEZpGCgQfM6Sz5jdLRbspuDCg1' );
define( 'NONCE_KEY',        'iUdRGjEPhIpw7ehUTfYY03swS0uBXh5lugmPiGITv2bwSk8rd4B2l8LB5PnMh2Zq' );
define( 'AUTH_SALT',        'm5sOtLojq8pdj6xDPaveLoBuvojBEPxIntxBYU445k2y04Z1mO1AYOM1T8fIUZUT' );
define( 'SECURE_AUTH_SALT', 'UB2oaZACQ3OA0stiPCi67FRWuyAUCBq6iw1EgiPSPewhLYXavxi0wwSLl1HRsNJD' );
define( 'LOGGED_IN_SALT',   'jqWm7gz9iEGTtJMQ03Cf1BkJiFZONRBEVBVBWVtevULTYAwTXPA9lPvpITdMBQg8' );
define( 'NONCE_SALT',       '7LTqA2FV60QqIDlRjlhHmZGarMJbW407J3Oh1TBUhjUCvQCTFup3i5qDSOZsXINf' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
