<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'public_goods');

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
define('AUTH_KEY',         '~t0cI O40n@h(<L(cYs3gCK6BIttO5H;oOHcjXyIb]Y)j-P[]*H<!FYQiWz_yXnj');
define('SECURE_AUTH_KEY',  'NWn L+s<OIQr,Af&kn^9LwiuBMOU)+L1fiqz$)9nCz-^K*vlAI|s%%EjW)s=UEiB');
define('LOGGED_IN_KEY',    'S&Pu2_M.c0{un$Dx Fq#Pg=#DQlT7A5$hO;W_*q#Px$!t8XI~B7+zT2@dfo&Kf9p');
define('NONCE_KEY',        '0RvxnofxE.HMk2niqB~KfFPbHNC.zgH+!l@YS;4n3yN(f&%1 p#6,g$xCnJmgQlo');
define('AUTH_SALT',        'I-c1krPkIgg$?]fdonS|A!6PRyM2EdZPTIo(_Yt_^ APBP?psvw+CWPq=x?oMl:c');
define('SECURE_AUTH_SALT', 'xnz1`EDc)ql=RMf+b6 0O$>xw#F3vUp$rcQ!{m5|73Lay_Z!C(5F$P]0=5*zB: c');
define('LOGGED_IN_SALT',   'nJ49UWkONFUR.>i2s-A([<2$&n,o6it)Z72B[u).sG+|80yGiavU|3TqFSvT-3]Q');
define('NONCE_SALT',       'id1gx7$)^?$8uY08r8AXecB@>g?9)Gz?j:.7|--VW8jo}HP&&jn y(QW1T?xU^iW');

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
