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
define( 'DB_NAME', 'hashaam' );

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
define( 'AUTH_KEY',         'DJieoabO _x#|h}]ZN]qf][7b;6,Ho)=GUFveht+Eo@QvBZ&&bO-huN3j_W|~,(*' );
define( 'SECURE_AUTH_KEY',  '*saaq]/L6m?_: 0VS36mbbNi|3gkSTYwvPqXj1c]_{FaB)yO%f%*Le/pd$C$MUB4' );
define( 'LOGGED_IN_KEY',    '|wFA#stv$8Hhm.{rqcI+?tU_T#oA}_|{%p{gux;LeEB$eC-+o/{4qeyA(r#e`mPN' );
define( 'NONCE_KEY',        '*Y,R*5aPYJX +]r=NX;d{r>;#WeYqKSx@ g_]b3+ro7-Zs41kTkrZJf3Z sB!u%e' );
define( 'AUTH_SALT',        ')#0[{feu-uJ$j::K`LoU)+xx|iP_K=hPc}S{Dk !&6>0@ImEF&KKKeza10k.p;3r' );
define( 'SECURE_AUTH_SALT', '54e>Hn/GOpLNd3|atzE@}xFonQ~ui3p;||;}~YT1|E`$my`hj,.<!?GZtRSgmI)z' );
define( 'LOGGED_IN_SALT',   'Zy4(f{^B4<@,q<]69+*dJoY;B`ska4]4v-2<&@;wS:YJr%2~Bdu.Jj:(D7fa4WuE' );
define( 'NONCE_SALT',       'DT?-6dAz&1C$8|!.w,xFjvB-D<BL2lBpQBmnL8a/BpkYI-Pj>|yHhP!y1 LXuI^D' );

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
