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
define('DB_NAME', 'nagadev_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '?GxG@nEY,]mNCzsC*y$JK i282Xwm)g3O h#:w{{,f=mb?mZ-DT!yTX=`VBh<@Ev');
define('SECURE_AUTH_KEY',  'OIybc2V-z64|AxH_5/OrVK=@ Imr&M!Q.NND&{pEl4N_ep=}/lrOZZ+pK8Zx(TLF');
define('LOGGED_IN_KEY',    'KTMsw7{wQ^.6tyU#i[*nq1bOD,d^c@@>EO0UzOJ@oO>r7PP`0*uE-Wu|*/9GQ5 d');
define('NONCE_KEY',        '~p4dfKdkzb7uy[y:0Ao0ja`(fVq.:R[|>t^aN/?Z*zE<tbm5U!U`*5R=-(rn;0O7');
define('AUTH_SALT',        'P:3R|i#|=O6:aE7`>+T*{.G`+!>7tZ/nm*oMSCYT<]e|GVD9`j:4D]pwXL{I74<V');
define('SECURE_AUTH_SALT', 'u4c]bLg~gie0B[ EdEv:wfj*x@3,_yNrhHZOL1Zom+6pnhvo3k(Oz<o5}$ku?E+U');
define('LOGGED_IN_SALT',   '7ggRxkD`JkoyskO8hODB!/dw^rHraHn{uner%M,b&;B9R[vc$x)*t=b9rEVHk~(X');
define('NONCE_SALT',       '|OSnCjH:u^6oIbH)aKBVV/OX8M7_]%6!8APg-NVc>^INI1pN,8KN fB%y:kzrOE,');

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
