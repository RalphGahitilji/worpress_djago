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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '[5pa] WQ0n,f*U* j03xF|lICv--41kE!?,dU`q`?9c^(*KY#%_EkgO(=*27~h+L' );
define( 'SECURE_AUTH_KEY',  ',z7rTT<G>]{^?,Cp3a$bYo;#{L<)e&J8,NQ]z(Dc2<xYQ}TiAq/vu%&EnxGI|idP' );
define( 'LOGGED_IN_KEY',    'o[8H3YDX+EVCIQDd(XfsN)G>xFSkuw5%^^4m3DQ3`dAg?X.r|Q`l/K2(j4Hoxp<i' );
define( 'NONCE_KEY',        'p@o`hy+GsIlT$UwJM`R>qP0_+bXNZUc@4L0jpu@*HgcV)->P.(7*66t%uMj9uD&L' );
define( 'AUTH_SALT',        'w5YepoDRPE0jFl;GqSEQ4C5H]]b(L|Ura,jW7w)Q!fY--L@U<Ha_M2i5%2)dSj;9' );
define( 'SECURE_AUTH_SALT', 'iuk19A[Z`*a4rRxeRREmjh%51n*)t[;oE_5g5%a:>6t<wjj]rM^OYZc:0o3-h(nR' );
define( 'LOGGED_IN_SALT',   '?qJBH1%+WU=1m8W_@6yRh$,$%?.CiK|S_{sHc6 !BbtV0aG(Z5.m/79ouC^{#N3j' );
define( 'NONCE_SALT',       '6/a0&nd)pr`!.j)#f;{eC;=f8^tYL(KRFhjzXecpVq<z1Xhq~]?27v5NMnsBe_<_' );

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
