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
define('DB_NAME', 'a');

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
define('AUTH_KEY',         '[d;IdbG6-F/9>BmbD_NCl=FQx,-jW?-)F@` Shumn_hpdd_!V({:KO1Jv4fSw7e7');
define('SECURE_AUTH_KEY',  '`WRcszwe{{hUOxL`k~fT=*w#ARKABQ;ev]mMsl2rrN@;AGtFNfo59RR:6DQ oJ{X');
define('LOGGED_IN_KEY',    '.;1ns&Ir#E4(z-|svK|]/t(F6-?d,%ExGKB6ky0G|8^-uLc?xhMD.%f}.YYe0%Ig');
define('NONCE_KEY',        '<|$dpLA|FzodZUg]H%Q8Yx.1T>~$CeH0qy_+aGpU56f4+ao1tPkCtb@1t?+Y t`~');
define('AUTH_SALT',        'G8Bk3W^0IQ|#b2NV=i_]hAy0Zi<YR@Tg:6`,I4-+.dVHB?f2Vv7O0;)nJ00h2liZ');
define('SECURE_AUTH_SALT', 'ZXTRc2s99o/FOWxm.iwfB=VN<jP9:fD<(syj@Ha8_OQjlfH^PnNFD[U%tXE#v)H3');
define('LOGGED_IN_SALT',   'Ur3[436#8SgjT !zi$Mm#Z]@5gklQe3sXJ>0!%OOA+n/0BMFbCvK!Gi0Kt~~.025');
define('NONCE_SALT',       '*6MF5|?e}j*hN|iw]&Z@M.{L^xzH3`gqH)ayT{5MKch vc4kIs[16HbUN[1mz+S@');

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
