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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-db' );

/** MySQL database username */
define( 'DB_USER', 'wp-user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wpuserpass' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'XAm%[6g&.[8S6mr![gaV?m5-6dbtl%_U,-B9CJlrG,Z_;5;{^g=_*e4<hyz8<[vE' );
define( 'SECURE_AUTH_KEY',  'vufMnn*hAnxk: PUx3  wCf|jwh.[Z%i|F0R)dVSj/*)R/qu(P*(:esF<78,th=~' );
define( 'LOGGED_IN_KEY',    'Hay>.uq)2>[l+5,1xXGuC5!I,F1s*VYgJNI?tl-vdKf4L/69|  H/2YAtWxSXO+I' );
define( 'NONCE_KEY',        'y=XPn>1H;8G)L3Kk;rXjG6BvGgULYGjzz%vcuQ3!w(I8(T-v4fJd^ZcnC_q,5oJI' );
define( 'AUTH_SALT',        '32B$<XMN#Bla0X$0&6til?l_zEw-IoEwAEQ&Yg_gX,v|(`u+W#T*yK9yR:&@ble/' );
define( 'SECURE_AUTH_SALT', 'D4w)07YB}<rgEu&SCc}adHWi8%D}PxS5(W<Z;t&_/x^fol=<lpPLo[?6fihh]7Er' );
define( 'LOGGED_IN_SALT',   ')ja&2nQtLcx/Oqp#+x|69&406ua@}oXzs;IcR4[tbdGm@il~6;@<(S|[uGGCO7,_' );
define( 'NONCE_SALT',       'SQ~]ity}=@OG@_OQnSw>[uNX_#3{;JdL~z2d6-@)_.}xFuuk]J#/RE~CYc;n)Xq}' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
