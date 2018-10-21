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
define('DB_NAME', 'pub_wordpress');

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
define('AUTH_KEY',         '}lS[Pn-KX,|e3kUbFWwvFt[uu>qmi l2G]7fsD?9@Js|P,aB1jI,T82e*`lg:3&D');
define('SECURE_AUTH_KEY',  'Hz$RJ0FEW/IgVLrRqWbarT^^rCw&I&y#-0#?yW9DWp.$cb2PECHCA-:pgN0I^lYt');
define('LOGGED_IN_KEY',    '>*+zC.O[}V|b~hx7^SDpOVk9^R6;v=e>Xf$[>K^6;+;8hOVwY|w}EJi<D+Zp/P:$');
define('NONCE_KEY',        'nhO<~b?TU6}LY0z.Q=dWPJuS$4/d~b|Bz$Tb] EXqVcFMaHqAP.aH5|}}xKq:6eb');
define('AUTH_SALT',        'ZRi&W*fnuD=9;!:P@EAVHBcF+<:q1H:t;^TzGYSW;5xF@HSqdUJ3.$T[Wyv46!f@');
define('SECURE_AUTH_SALT', 'Jxt2pC9(|hj,qz7=YiJyOfMFvSM@t3;Bj<u5Q[[(b4`jcp|}O8gRv;gM5tNHt~u{');
define('LOGGED_IN_SALT',   'wb0Cc3P5O[%!l9iP9; ]~]^3mtOJ#C8b;SUml@q+)]K+2|Vj:W>vik/G_wWHDofj');
define('NONCE_SALT',       'o=I29X[mekM~YT`{x.Eg(U1jdmgW=R*yEj2KF@g`jo?J8Dz6AoSP9Jv}zdFV6fU3');

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
