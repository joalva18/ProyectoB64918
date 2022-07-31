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
define( 'DB_NAME', 'proyecto_db' );

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
define( 'AUTH_KEY',         ':QG*Irktef,w9j<qsFc/=evGN9o?f6gzOQuN*A)SINGnFxNJPMXJOVHM<}0v&rlP' );
define( 'SECURE_AUTH_KEY',  '0=JM#(%-h.L;fI0f.nXtcsO7#uz_Sm@K~0fcX_ggsH`kZ*QS9nS&K2]VrkCHE8=O' );
define( 'LOGGED_IN_KEY',    'm(uQf,aeRa5TD8xi772K{I;sz6M3Uv9=@nNc.5AlPo(S?*y85w*0]=1{N?5(k(PM' );
define( 'NONCE_KEY',        'P_3W!_iI+Z*(ZPoG&y0m?Ey}JB]Gi[2wU37163aK14F~YWTw!MH,MK}o<exnJWWZ' );
define( 'AUTH_SALT',        '/N2&:i`URL60!9q-8 8iJ?$VOK$UlJ0#Y`H@bEzTj [e_+Hd*o_%rlvQ< #ox:@z' );
define( 'SECURE_AUTH_SALT', '+#Aw FFR9!d i0Jr,o#Lk76,Yz)?Z9?Sv/N!dl)_!Rew2%M<]y](+UBms@NA#&dr' );
define( 'LOGGED_IN_SALT',   'qOKF]6]Q%HH;UD$9s[{%50SNPu`4YB$E1?dz<V$R,a23^PGY/IG@5*0V~Es}*Vh~' );
define( 'NONCE_SALT',       'KErv!Jz9jOv-3F+,A7g1*x2@Bt6@DOt<s/ciCY~5.O{+`BG9ok&}I31d2P</#c1y' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
