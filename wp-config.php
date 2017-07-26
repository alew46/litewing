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
define('DB_NAME', 'litewing');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '}8;fQbPF/2rG&nXC$-V^KqxGPGXli~5_<lH#RI:j-05V2X$8qp$c|gH^*scH6RKS');
define('SECURE_AUTH_KEY',  'jI.`cFpZJ#_EdfBbPNtHS3R?yMpI/]jE;ibJgR{/x&nY|0iAPlgCkh[hP9UF1Pf)');
define('LOGGED_IN_KEY',    'S2!Pwa:oD5J[u5fW_gRHu8NJ2;TA:a NNkS7x{1:_b8vP^8izn7->}It?!a9]2.&');
define('NONCE_KEY',        '|0k ]%4R/>H>$@:7%q!/A6dJ #9V]y~Bs;0j_|DT0}1ed&Uqno[C74BIwzi}}dP*');
define('AUTH_SALT',        'Ct}zh?%L)iY6D|eDe}jr.qZw-?c>d4sA[iChR$hjG?WK#JtT?8*oDbY)3I_}?[/n');
define('SECURE_AUTH_SALT', 'A8*2)0!dur Yz^}hTOUv]a^nWOcz<5eF8Qjyd_Et?MQl/bg5R^.TUt]QA^OkZrwy');
define('LOGGED_IN_SALT',   'jM{bT+Bf[9v, sd/q ;;l.taPGZiVsG9B}>Rf3#1U1^%DR%sa=_9+6)4T#(}~& E');
define('NONCE_SALT',       '` In<s+(a88^zuy0!TG:u]%t^!fSS?H3Y4V&!csI^ItP,_7zBf8j+RfE/f:nt6@|');

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
