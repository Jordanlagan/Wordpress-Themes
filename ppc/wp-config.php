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
define('AUTH_KEY',         'R~Be@g]%z5$PAS0? 4W7ttE< 1Q!#{9s!$EL?YELkVF3U^h0Hh&[yX8h6$NjleS>');
define('SECURE_AUTH_KEY',  'RMwy(nOkru^xIZZFg9Z!VN9m_KD 6Oqr+WP~N5{cnL9)u*l)CJ/0YA@&Cz#YCREq');
define('LOGGED_IN_KEY',    'pP](i[.Vk5_k^>tEnV4f(^5%aLWf;V&^x=yIvr? u&dn- yBE,}M8Uw+D_>JJ2,1');
define('NONCE_KEY',        'qugkQ3{}G+Pw6EmZW%]}PI hTl}@*QT!&t!y< H{.[rH*9wWf9xo.;9_KG<+1oN@');
define('AUTH_SALT',        'q2&Q%p-`oS-=}~]g!a?3S;pp/q0T4MGfgxzYr.`J:?.I&9u70phmYa(&@v1JXkxs');
define('SECURE_AUTH_SALT', '@#oA2<K8qvFP m)y<VWdBppLbfe-eiJxt7]!.+ubunW|^>=cb;2Se/5AhR9X7w8k');
define('LOGGED_IN_SALT',   'dk#23#SVx9ewX&d~2%sTSC6L9Ahc/>NXt1;Px;f/RgZfew.;|0A@N}]F9;)(5F?~');
define('NONCE_SALT',       'Ri63,_z6j%dQ;K< @cGx]5J;lr[ecpfJ5L@!Z2>w7ZoNL*<vpc;c<S{C4<r((mOk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ppc_';

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
