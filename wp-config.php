<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fcclwp_db' );

/** MySQL database username */
define( 'DB_USER', 'fcclwp_usr' );

/** MySQL database password */
define( 'DB_PASSWORD', 'eKEp38bIAeno8OpD' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.0.115' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '&.A/r%1Xe}H_.F=mN{5)K=NMzvJzUdA~-bU.pLPKgJ:mKj6X+y_W{_$oz].6l/;A' );
define( 'SECURE_AUTH_KEY',   's`!jn-vot9U)BQ8`LG5F):I$Fo1!+gY,Sw#9QH_%&t_KQR*|^)g7^:|^JyCW8E2O' );
define( 'LOGGED_IN_KEY',     'C2#5R~Uf7~s)U^{RS0,Y=To@Lol)-_ lKWNyYSFrT#7d 0cVsDAu@oXss@:,1A&&' );
define( 'NONCE_KEY',         'elAk:5`e<M*k;(-+m{P,u6JcscIqyRLWM~Sz48Af:n%Rj8Cy(<}!u?-Pxl+NLO{N' );
define( 'AUTH_SALT',         'D~ErIN?LYT#:tA-<pwEEK~<Gp$P+O}QYky}9q&m/sv?^LnB/07HyuDZ_w<{Ld1hu' );
define( 'SECURE_AUTH_SALT',  '=^[6Rq(g}RlEU&k @@fOc`2OzQA<z8[l*((-UYf =Nt^P^v9TwPG^gCSGg%?8YgZ' );
define( 'LOGGED_IN_SALT',    'RTPrrn 5apCA$@}f}tP^]qAwjNqw^L1Hhrz?7S-BKIq>H/IB<_|>KYXd);}dinnf' );
define( 'NONCE_SALT',        'zwuZIOyp}.(7AnXTPv~9*DN .NvIbl1g?h>m,td6qJ}DYA9))b?g_:)vAylG50?h' );
define( 'WP_CACHE_KEY_SALT', 'tu4?gVD==/31!6mX7_2s_}^}+CEN_-Cs/5gY:Fk7P|3Jio&mNDlZ~/7:%C_ico^{' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_3c2759b154f_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
