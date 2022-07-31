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
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '|_-V3#hZUuJr<>TpZZ1wH$Fc;Blg98hy]=.%#?;mtp?S}|Jf8?6IQ1p#TR S_Lc+');
define('SECURE_AUTH_KEY',  'OxK2|,[ckthH|10LH,W`X+a<>?qmMh6|A0TAR:!QFv7^&bZ%Wqlr3RqwiuS!4XrX');
define('LOGGED_IN_KEY',    'X-2mD8CIVxr*l+8y2V{d&t{(/|#bR>4a|-6h|sqAqex@Xv+laJG~3z##)<M:>q[<');
define('NONCE_KEY',        'TDPCor0Q<ehhBFiyIeKN[(3DbCV,yh-@^~g4W(vHXdFOs-{L,42m!-Q)V${[;5..');
define('AUTH_SALT',        'OmL.:5b*0D-h;&UD$hO3ErOULth?*H3V12u~0}UywGl^)&l~5!zSf=+Y7+j)+SLV');
define('SECURE_AUTH_SALT', 'h[n!|ANl}d(Y,d|[tY*fC9+O+1@}Qt5JH nH1n-y7M+_@4qcDgy/S|wo.vJm52ts');
define('LOGGED_IN_SALT',   'Bn[!@43u;nChZ(hWl.k*6FrRag| :c`=P ?18b^O=06V|h=,x,^ %|;t+3O_E@H.');
define('NONCE_SALT',       'j+ O1JxV4]{n=1y=sM>rO-Zt; 0a`Fpfg4s-Wa> $v<`,YRJ7U&;++LT-?&:e]iU');

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
