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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         '.Nq8a(2SYv)SEe5>iy86*e89[QSe,6;(*WkU.yym}a{d-eL/_nNu[iR)Pw!Ic5||' );
define( 'SECURE_AUTH_KEY',  'bwO=)N`u:t,qc8Z J5ZOx|(^+~J:4B3TIBZ5#fr}?)B~OQC4.(GinS5)PkoSgp#b' );
define( 'LOGGED_IN_KEY',    ':)=g5]!ho9T??WatyiWePZY9H@r:o<62Z%o7Hj{@:T]vla|AF_ oS3h[DZ^pZ&++' );
define( 'NONCE_KEY',        'G?i.5+Yx6B;K|DJc}+?xtHQgCukgy^#p}o%!z`$h4|IhuO-Sl?9TG^NZ:4X&w^rM' );
define( 'AUTH_SALT',        'DrXsF-/I$RIaGc!vw5Reo*(DPa@0M6.Ys[nZVJqxaq6acv1=rQmcbUm-uqI!V8qG' );
define( 'SECURE_AUTH_SALT', '0Z9Isl:H{iEDSdZC:S/]7TBJ<^*: kMzW@r(`[MGl/ V$_@H3gB-*>bLqt&3/nM9' );
define( 'LOGGED_IN_SALT',   'ac*0E?,6E:QkCT8O%YG~)UT!Z@D=@2?W#_yQ0L)aqAm8|W}V,#X/i:Zgw$4iy:BT' );
define( 'NONCE_SALT',       'uT|7udc-&w-{sk0Xs]OSaPV|cE8C>Did9+5lG]^eMv]wVq{O>jEv|)!oUGUWF2&$' );

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
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
