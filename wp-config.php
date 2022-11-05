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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Amistoso17' );

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
define( 'AUTH_KEY',         'EHvE60QRcFfQs97cVLMJrmTTh5zDKAr28K2haVu4OzSnWTFmnGVMespMHEAJwykN' );
define( 'SECURE_AUTH_KEY',  '9nG6VfrOFfBK03GJllEwJ3C4zumGLZy9mG1f4cabg2FQonKWDYUAf2Ztfku0PnVQ' );
define( 'LOGGED_IN_KEY',    'EkfkqiTfuuLcYa1UNknQtD6HGFWMJ8YMNzGdHlSzCojBU0EOOWMF2mebbBb6RMxq' );
define( 'NONCE_KEY',        'rKTdvaVzMDt1JhrIiX5ux6R3i5z6M5oWWPbPTXk31ZDvcOrKryu2ZXF6kLs84HDF' );
define( 'AUTH_SALT',        'FNk6a7LPPXG0gr0f7hvjELSnfo8ubRafRSxFCItcqAgpjbvnc4h3JDKWUYoeSJ9H' );
define( 'SECURE_AUTH_SALT', 'jCcR2rzPzPZ3OrTTLT0WFOxPnuOqthCZaexcuG8VTOEJPuXy0Bvdj2MpGOoBCaFT' );
define( 'LOGGED_IN_SALT',   'uxSQEMIpdQZ4saB07qcRaIcPkUMdt0p4uR1w6C4In9UMrNiM3AKtpzvTD1Vp2TKM' );
define( 'NONCE_SALT',       '5fZJswOJzp6P8KmwifqAAYwYs7TwnFSxaM8yPLv5U6Vft43y7BrUlPcYLOwum2SP' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
