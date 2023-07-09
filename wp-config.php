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
define( 'DB_NAME', 'bricotips' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '=`}%Y!K{mqrPG^47Nw,,Fp;@>SOH?[P58_`;#o1KdQ](Z?2a=})m<1|56j]^K7S^' );
define( 'SECURE_AUTH_KEY',  'T2g}d@n^/}H.)5osg%&k,]l<|Pe/l|O3qPne:pvx ,%k>db9)f^aC{#<D!W-r&8$' );
define( 'LOGGED_IN_KEY',    'h`C|s/$40{z/:_c]*<E`){|vmzN/y7#B)VkjA|xk>QKj%48CzK8$o~qwcjf6O.=T' );
define( 'NONCE_KEY',        '[As~O|8KZQ^OlxiWWg3eWM:@F)t/U<N4&^+&Kxge#HSEJ:<@g,VxR4ndG*u_hY!_' );
define( 'AUTH_SALT',        'VA++n7JyH3B=%(HZzpAN^ev*;v>R4w/w9X*q{LU5>NPv$tA;6vBjmmV^Y}*}$pi*' );
define( 'SECURE_AUTH_SALT', 'q0K^mq`y;E*BY5?r81p]E?==!RrQMh0OK-=-6NmL8GY_UeCYUWGh^`7n^=+Lz*$p' );
define( 'LOGGED_IN_SALT',   '9vR% q)*9a00LrQ)Z_gd^owhr`6p|0]u3LhUue^vN*VK:j57)R6hPR=V,NaC;7h;' );
define( 'NONCE_SALT',       'GdX%)v7n&(PbeA8?,w8sIk7gxTitZ;XjmdUCRzC}ah7[2,KT1ODU!}KdI2oje9W8' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
