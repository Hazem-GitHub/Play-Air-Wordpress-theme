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
define( 'DB_NAME', 'play_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'E|Y^IV1GAW_cy4UP7|}Jb66sL~?Uj8#2ad!2#-&<ymH$DCFXNh0#j*}y?M[Tm{ F' );
define( 'SECURE_AUTH_KEY',  'G:TmleKE8Db946*,:tJ@tKxpPyJxY^>Xs5_?}x`6dK$sS%84*[S--p3ODZstxpl?' );
define( 'LOGGED_IN_KEY',    ';ovk#X#8~P.U9H^EsHeAqAvMt8K^MIM`VTm|u+4~G)9)1XrEn`^iP3Bxh?*!`;^c' );
define( 'NONCE_KEY',        'e_@mZye|Lc $_l<bL1[dUK31g.Mkt!i~f6T9VZYlT|#*Kr!KFm^a[LbR&zW4#GH~' );
define( 'AUTH_SALT',        'VQc?3B/pKkyXrN%eN*9 rSkpjqt ,!6*+5o3nz9KRP|R[/j:z._~NWJvq7xzS>$r' );
define( 'SECURE_AUTH_SALT', '-m>Lzh7{rKLap9j5-Y9?!JY#JoZ6[x<M6p&+hH2@3dQY%rmihQ2,Oo3uScUw.cn ' );
define( 'LOGGED_IN_SALT',   '3lp:8.Gu<Q6KYez:N+?z_{wjlyLZIW|lPx%2gCzB}1#]bo{LKM`aZ^F7Woc/*sXM' );
define( 'NONCE_SALT',       'F,:z=_skx~(=3Q=JsD<)vUTQ.CKb+a4kl.BMA!=~A{|OLy4(D[_W?.?s>fKy^FJi' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
