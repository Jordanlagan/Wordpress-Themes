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
define('DB_NAME', 'digital_position_blog');

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
define('AUTH_KEY',         'i`fV4]cwRLxu(rB,$w*8&AiCQc)h1;ePbTt,EH%KIU8$k+_n>D/RKO>y$*DN+l4R');
define('SECURE_AUTH_KEY',  '%?L8B-}QOswkXw4u6:Fr>~dB@7OIf*ga(3I(VGWnl5!.PUJqjjb=&QsNEoYWPLdZ');
define('LOGGED_IN_KEY',    '1}YI=(wrZEM#uQR_70gx6p0)*):^Plk%^42sv[R&$.V;^q:vmYCL8A>Ya^)O;FU6');
define('NONCE_KEY',        'd=-YDc?a{8$]l<+_$1_B+Vpl4bdLYvM7!Y9]cQ6v$DA%Z*jkF<k+y@oD_ad0goFD');
define('AUTH_SALT',        '==&XSHX+<Ny$Z}B;_Z[k(Aob_|2Mf@zPD!g68a?g2d [Mv7])tvGkN$TmpNAc-8q');
define('SECURE_AUTH_SALT', '<wVt,NP-MIbKOd,X63@#@Zx&Yfk@yy2D D7t`>I8gf0&yrN2Yn)FAcoLmOG!CM#~');
define('LOGGED_IN_SALT',   '[V+L@;Tl+nW-WzV]D~4o)FTz)ZRfzi;61x(Uh]Xo!qU=B`XK6.yG:{w^qt=T>o{X');
define('NONCE_SALT',       '1TW^D6L;|[A fA3965?Z_<?l9EEIALcs@1BWyBjT$9F}x`F:{t?Yo%8<[pw(Q pr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_seo_';

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
