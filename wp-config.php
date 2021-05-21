<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'smartlb1_WPA2U');

/** MySQL database username */
define('DB_USER', 'smartlb1_WPA2U');

/** MySQL database password */
define('DB_PASSWORD', 'yNnIOl0343ZSvuxlL');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', '2d6a14799fd0a36b08062ca6464c6eb65125635333fb8b0696510e17ff1b8031');
define('SECURE_AUTH_KEY', '931c23d936356e3268cfcb93a44e3553feca2e1d7bd63f8d915ef131bdc29385');
define('LOGGED_IN_KEY', '2b0a9cfe6508851672522312bd0c7f5d9756c51b3911426ada5d0d1fc5842afb');
define('NONCE_KEY', 'f3e28cddb80843aa33992a55d1607d67859a64459e07c3e242bca2384ea79dc6');
define('AUTH_SALT', '7549d5b02d0b83d02f09fe2ec722fb4a03a8bc33fc0b1f7f0dc986559a919801');
define('SECURE_AUTH_SALT', 'ce6b14e98c74a5b61f3112fcde6f6b53634093a8d85d9001c7e2c3318aeb601b');
define('LOGGED_IN_SALT', 'f8a4ee01316d8a4b50343fd2f99bdbca1a447652a912783586815bace114c9e4');
define('NONCE_SALT', '2b6457260b7a74c364ccb1fd4863e285260d6e30c8376aaab712b0129a1f0813');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'l9j_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
