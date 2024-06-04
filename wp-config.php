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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'big_store' );

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
define( 'AUTH_KEY',         '_NP{Xi=F4luz,W$lK|N T:^[9>yI+b%cR.R~NK?]Q-gIeGtv$5TrPdAS<s<G/c-a' );
define( 'SECURE_AUTH_KEY',  'LCHX.1@h5w>r,i-n*yzmr1yDIfF(A=r#bSZu;o&:9Ud:S>9=j4+Y1z+X^f6+5,SD' );
define( 'LOGGED_IN_KEY',    '*K{,{! u7x*wW;<ci7rm!L5qZGLJ]cW0vF3M^/sczI|av>^g@Kd3E1fyKb1#a`]A' );
define( 'NONCE_KEY',        'kX3/z}P](ufe(_i3:r7S~2!_(C$nb!;GzaRN9nd)*)P~MTp^0?(-/ |i(Gt4T;me' );
define( 'AUTH_SALT',        'L!XAXn+2rO,j~R.+sl.2Nk(L@6cfA;,we!;:;7UR<57{cIw1+E#RjGTL{@ss<^z/' );
define( 'SECURE_AUTH_SALT', 'bW.y&CA9U)xrx L|`uDz?rbTX.JsQ;s$Hi#B0IZ(5g]S}O58c^L+j?qNx-*CP;,*' );
define( 'LOGGED_IN_SALT',   '?1+LXKFahk-g1NAG$[+tuUG&2]}sl4;_nJ]T*[?Io-j#lzEt~Ep,$Z]0h(0hfEQ?' );
define( 'NONCE_SALT',       'kptTF:b)DS<UV]_(b6Wm-cU1]TV{%tE6?;VlKMW/g,/nq~>x`vpf4AT]S.$@fR<X' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
