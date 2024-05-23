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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',          'D;jG7VDZP!e~vnUee:x73LwiodNb3+g8N@x=]|}Gw1-<AaFED)b#}t+Mp[ I`P&V' );
define( 'SECURE_AUTH_KEY',   ',Qw 2?7 |f0dbK`b8H4+EQ$0;xM*xDQG&%Uo*E5i,HiN:GHng{zOw*%l6ZLE}Rq&' );
define( 'LOGGED_IN_KEY',     ',~P6#kfX1 PI:zU #fI0^Ed0d=TswNWlHX%@|#[~O[?Nr.EiWC4*irjrVOhc9@=:' );
define( 'NONCE_KEY',         '|7wG!p]qNSC#d6!]lG8*p_*>2n{ace_iQ8J*J|5,WI]I[bFK?`c ^9EABWIGx^Pf' );
define( 'AUTH_SALT',         '3hW%;Ti= 3?GHd!Pso&29%wy<DOzD{9H{!VRQaA5skX-QHJ5S.MjJpn:RdgJIU 9' );
define( 'SECURE_AUTH_SALT',  'Kl}94z9O>r_et@PV!bYnM]TR=f:Oabq:I56jf~:a}q[%Ig<X&]+rh#3&)fR{BTFi' );
define( 'LOGGED_IN_SALT',    'e,,YE]z7pvvBZ,0+ S0V^H7^u0cm$9?Q&O17(HdxuG6G3gzoI]Wo2LMZws}]R:Di' );
define( 'NONCE_SALT',        'FvZ*8`dp_-DN.ka.4)ZLiyrVb BGHy(~(<u[&fSM!a{+V?&%|1j$g3oA>i/1d0}P' );
define( 'WP_CACHE_KEY_SALT', 'm3OJY-p,^A:K=JUa>;QAs@N=MB64NWxv/om*{I){p;d#sGU$(f/.[x76Z8+bpA*D' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_3c2759b154f_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );

/* Local WP Error Showing */
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
