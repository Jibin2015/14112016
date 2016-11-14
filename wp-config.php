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
define('DB_NAME', 'muvattupuzhasf');

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
define('AUTH_KEY',         'AJqnyS$JD!gc7rE#fUVNkfcJ?>g:)J[dA)6<X!`c|pjKeepk-1kQl|[*bDx_f^Mc');
define('SECURE_AUTH_KEY',  '7F:Fb7aUQEt%[m7?SgF<i:A9uencr2;dmv4|`x#C#+_]3`mQ}6 1gGyr9`!{<M2!');
define('LOGGED_IN_KEY',    ']pJ,Itn{uP@C{ox4:z!6kl+(Te?v9Dzsl~N6()ie357:[6CemsiUPe0Jsl6N<;aH');
define('NONCE_KEY',        '@E&?n!L;f7N_D$[o?+2XY;g^^-)&gUqRm#{GD]J/2_/};]azq<*oLqI|kddisYFo');
define('AUTH_SALT',        'BS!$|wy&#vh}&b&9Eou+pL3Mjib8b]MFQf9ySD1pB%e&-Wap:LkzxEcupo15[sNr');
define('SECURE_AUTH_SALT', 'l%2oj-:UTIWu;5*/_>>{qQT$pC|0BDpg`Ltu,cbp{C`,zi-uWYNWFyX[)YH3SZ.+');
define('LOGGED_IN_SALT',   'OQ]41v^TVkO/%|&aQ/usvt~ T}|eL$P;s:J<C&!`4t{zICo1AAzm{CY?!{Q3 FE_');
define('NONCE_SALT',       '^.ntj,dL19Z}^zy$w`:R`?.]EH-T3EX]b=nZ_bV+/;s}X<I,;yxIs5CvKs0XfI/;');

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
