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
define('DB_NAME', 'ypm');

/** MySQL database username */
define('DB_USER', 'dbadmin');

/** MySQL database password */
define('DB_PASSWORD', 'Ysvs38#3');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'S&[OTzfSlRpT88yL([+FS0Isv};bEA;wbo#5q[d:P^(.Gc:+avuz1.9cK`WANt?f');
define('SECURE_AUTH_KEY',  '+F;|1zSUzkPg=R- 7zPwQk}hEr[]fN3(E@)`ut$&m;9(0A2C)Cp0>x9J-6%@`Ii%');
define('LOGGED_IN_KEY',    'dU|Sseug*,(`QcCiDnJO.6MC$VHx!+o)&CZ`<9$*-zi@=(ZaYF&*Xnpe_0m~(u+D');
define('NONCE_KEY',        '%Uz$kzb-,;+I_cc50{O(x[ f6ceK(K]SH7=l!-aEt`xhOG7n|baW%%4QS(/y6s?R');
define('AUTH_SALT',        'oMogY0E<gZ#2Wy[%&,NI&F[$mzB%d.$&XtgriH98eE:)a:3EaL9F~tnVv{b[lJm.');
define('SECURE_AUTH_SALT', 'G~yn_s5b:$.nxV 8//-d 99@`tX^VxFmeP[<7So~Cp@yMd|_)t{SYUO|F){4Q8G+');
define('LOGGED_IN_SALT',   'qm+J-1+BOE`BWu +7t&[UBIq8eV2^KENt8DfxD5}-4krh$<93aVj?}+Y.jv}Dyo#');
define('NONCE_SALT',       '+.-%-h~ae~,_P1~R.=-vSnE@`l@&IT8XqXDeVa>+u,{1c,#- }}q(:?Gxv58uK[|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
define('FORCE_SSL_ADMIN', true);

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
