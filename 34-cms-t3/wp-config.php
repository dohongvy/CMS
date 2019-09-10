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
define( 'DB_NAME', 'a' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'm_aa&6,0l,SQCrNm0tp//ss3w2MSg[QO3fe.s%|,apK}KY]^_dWd!dI$^[FTo`4$' );
define( 'SECURE_AUTH_KEY',  'f[7n<#MG:Y0n6/>)&BHXkA^Ri:e^ (#Sg;@?<XJE|HtT8M<0.*%)R{k:]yLzWo;d' );
define( 'LOGGED_IN_KEY',    'qC_6zxI{a`|W}MI1iU.XOxOC/t,xHXD5k;]0e=8hPIsQLi]B1bSj63oP{^)_?&rL' );
define( 'NONCE_KEY',        'n[Yte~}6twYYT@T7S9-IGVx}sg+*<[.jpG)FsorAyW$PD7#G%=;FOXlqU;[]qi2e' );
define( 'AUTH_SALT',        's70?f|F($LQT4B5,+RS5B2jb~/u%KR9#)!k6g=C1rTK;B..gmh^~1EKi{cAI 7ut' );
define( 'SECURE_AUTH_SALT', 'NA&oh`1Z*-X+Ps#6%35rH]yqC+!IuPY[2pWJbuJdx*P?)-WI41JVIg+&^tLm3lka' );
define( 'LOGGED_IN_SALT',   ')*sSg}Vnr~guJIMP!r1@/y7?5!0gEkWj)TpzZK#s(&Xkk1E_bMRs~b]I~y1PiQVD' );
define( 'NONCE_SALT',       '_S1A|73SvSq!v]WY]%<MEPsC@UJ2OZyRaeS7zxEH/!i!GK9Sw?>vxUPtj_6#-I9Q' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
