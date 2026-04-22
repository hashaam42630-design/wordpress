<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'astra' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '/:NHT|PAnf-vLTQk#($QbL4NCDC5ba@W/bv![tL4({omO)nD#gRl05o-HIZMYm9O' );
define( 'SECURE_AUTH_KEY',  'CwaDmkea$LJaPITs^twOeCd|7A5a5Ec;QZQZ5#N%A+v^qCnzXH|SZ^e0{^x#-ss7' );
define( 'LOGGED_IN_KEY',    '/t^Ip}@Hh^Wblnr+CefJ>auKsN?2i1K6POs{7 9Xwf;h|@PB<5113oxLC7df;di5' );
define( 'NONCE_KEY',        '$mQDN_(Yh]*O4F.I&>Dh~c;D%C=Q;vVq[D@c_#V46r6Kd6RmZxN-X-UAZoJ;D{S/' );
define( 'AUTH_SALT',        '#FP^7 %7h}78So~7X*z1&2@.bh!=NSUP#3@O~t6t@gOx^<{u@KGQ*;6`v.)5;wa?' );
define( 'SECURE_AUTH_SALT', 'P0_(O0!7$qV;f!4H351BIyh@-.p2YZ7WW0y^.c<nt%{<F9]3rPkt|>[xZ.r49a6:' );
define( 'LOGGED_IN_SALT',   '&b#}J12R(+v3DBw^L09TL&v?[e*IC6IlmYYF01W.mG{Ryz7NG;qIf[qVETLn~@(_' );
define( 'NONCE_SALT',       'jl_%yD9(V;ot^BI0odq4Hec-j@}hU:nbsS7`#]EZK(mWE4 yG`??Y@erDC]{1^ o' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
