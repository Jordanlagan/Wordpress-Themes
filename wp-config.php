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
define('AUTH_KEY',         '$|fD-WraXIf}Y**UY`ya7;zm0K[ Dx+Mzh*sw2pR}A<.m0L)7*MM{`p0{?)RJs,H');
define('SECURE_AUTH_KEY',  '$+7=&fAIJp5,`BidT}7oP`D(6qCo_?D4v0QK#`(BbNHamf/Sj~;^m}5i7Qz80}>R');
define('LOGGED_IN_KEY',    'KkdifI 2hm3#$quq9CxgsG;=;yTM-=9_v+K,uQ113OJ6T~h!7`n|$NSH8?z!!2We');
define('NONCE_KEY',        '=R#wV/gip!P{}jQs=Ke74wauRE:+t? tO6ib-({DQJ<$:3@Kfi*PG:ipS~<_/$cl');
define('AUTH_SALT',        '6>1P16.?ead:E/yW/o%=?jncF,S.I)#oQ{hg**{bp:6-No@Eb{U)CGH&FSvw~?c5');
define('SECURE_AUTH_SALT', '4Rw@Q)IRhV^bbOoFsvq__DYO0=5|>mztzzqxLG;Wb(C3gL5f9fRL/m;N/TiwAwVN');
define('LOGGED_IN_SALT',   'mJ/TH#_Kc{d7l#R9.|F)VD/^gM#r(53kS8>^:*1Y::gq% i9I_uJMz0&X!QR,KLr');
define('NONCE_SALT',       'z{j)G5dI(@$ j(Af>H&jB-8|GBG(A8/MsE%8re*qxY^>OS#luK#t)w)$B~;;k@|7');

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
