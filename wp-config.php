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
define( 'DB_NAME', '3swordstyle_db' );

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
define( 'AUTH_KEY',         '?NqP@TA7f`GWm#7C8JZd({Tl{rNY3Uo?hrCJ-/q_Kum0?i@*&vC[JcKS]LB9Z]bD' );
define( 'SECURE_AUTH_KEY',  '(9aKL%Lp><pU^^qoA-,d[k>/:nIqaZE:VrYirR.5crLX4?G(^/<9W_8YfeZ/e J~' );
define( 'LOGGED_IN_KEY',    'L(g5|v+j-vdy:.TE7mpSoFAeGqjIS6S2=dlc%HnnF.wEppk(^:/r-D*-(tqM 0TQ' );
define( 'NONCE_KEY',        '4|uq&^vS 5:rN)[&Xo%Kc-+.(Mloi`#Pg+!Eg9DWKr7|L%~?~sOcOgHd5.cm^/c{' );
define( 'AUTH_SALT',        '{W6OA#sPH7P!Y6r53b=F>hOO9}itS?pkj.R.oi`Eb:30.u*WzCds``8o[btX%J I' );
define( 'SECURE_AUTH_SALT', '|;t%Ym1nrDQJ{^vimBLD*qT@d#ASR[3ySyRYeK]i&!j2$Gs]m<j:2FVf}e=>VCKM' );
define( 'LOGGED_IN_SALT',   'aor44K&m4CM-?@l&:F}I^OF@!8K^`ts(]&FRfS+0o$pA$/%yrpsa;K`q@888}Rkx' );
define( 'NONCE_SALT',       '<w1e|NilSVqjXv*[=mq]t{t@`--I%HDFB5irk#&*94Lu[I&s-_]jZ|Wv>*@eeP[!' );

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
