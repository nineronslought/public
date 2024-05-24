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
define( 'AUTH_KEY',          's ShgXl}1l]a_*-C4%={EjZQ6VkmlK71zkho*!d`dUX|t}>Ts&6D5Y3/9~<{Q0qQ' );
define( 'SECURE_AUTH_KEY',   'o%].TdUpU4C:8=@~ ~%,=,NUYhdsjboy,~y(.,092xzA^;$HDLIq$m*b*F8)lVw!' );
define( 'LOGGED_IN_KEY',     '.d[)9kbOm@OK:hmqt50X24v-OEkXsSyb)YS #:iCD=XmZ@$0~ceG44kP?[29^Ovq' );
define( 'NONCE_KEY',         'Ok`,NsK1l45VrThr/Al*0xD(UU8Y;iQl*ed-0n-xtyzG0%%VcjvylNL1ACyeMVTH' );
define( 'AUTH_SALT',         'o}(w!he/[W0AcN^ k/h{6]j xM6OI+ ZQ| a5lc`/K%!=&hP9$9:r,MYA@167&Y`' );
define( 'SECURE_AUTH_SALT',  'SZv^.,d+d9ew,n~NgFdn,%>hPoh=z#M4#iKq~uFn!YH7cl*w=8+n0,@UL#hLO{$h' );
define( 'LOGGED_IN_SALT',    'auL!)R#p2*+x%Lkc<:auKve#xmgj7l<r7#9H*`wF@Z!tp8U//@uM%tRFHAI%]DH$' );
define( 'NONCE_SALT',        'Rl3Xsl$n6DgD#Ko*p]<cG&5g~5=}o&c`|VrJ67E_%BXAP/cUeU`Y83M$;55$]pM1' );
define( 'WP_CACHE_KEY_SALT', '&,Sy!H72xcth1)=pNGg4yO!]qr)drN+`uYTg*9aIO.Qj-i}PF}8kduFF]v~=b[Vp' );


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
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
