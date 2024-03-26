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
define( 'DB_NAME', 'ocrmk' );

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
define( 'AUTH_KEY',         'Sx&jy7=y4ene9|}0xuNN][JTkkJ9C3m$}yFyuk#bgGe~=fZndI6P6,t?J;o:)~4k' );
define( 'SECURE_AUTH_KEY',  'R9bjm98t_`#R_%]!?GKcXq mud/_rgvySilDU9Jbo7vtJP2ZiUgfj.[dq!QJBO`V' );
define( 'LOGGED_IN_KEY',    'xjT.2*|-3D~!MZnGf>!rrV fZJcY+( Gj);XW41E,pPGsm VCuXg?y6*eJ/u@Ql#' );
define( 'NONCE_KEY',        '-q(a_$lUcJX8UjMA[!CW-0 ^Me0kqf~cG:fsKPjB=/Sl1,D:RKsHfi@+f$pxIw):' );
define( 'AUTH_SALT',        ':Dg1}{VUX:K0hW_1kBGTGNb ][TT L}Mp_k6cYCK%Q4?_Y^^xl-vYd&]lvs^C(H@' );
define( 'SECURE_AUTH_SALT', '0[!#J-G)YlQ4?)+)$ciE(d;Z1hAF]pVY`nWeu^zALWx#>/x{8Z`6Ls 2BbzX&4d<' );
define( 'LOGGED_IN_SALT',   'F/0HU;1t)VD%]?VE&.!xF5+z2Ez/Uq=QpX*|gv*6%8THAzDpcSMzo|llwo08@q=v' );
define( 'NONCE_SALT',       'xk%BA@([E>KZ+h!edtsd]FY-rh^j*3/])jwca,X@DIq-f<y9g6SSdTnr;dX}l*nT' );

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
