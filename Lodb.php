<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u1721396_wp834ti' );

/** Database username */
define( 'DB_USER', 'u1721396_wp834ti' );

/** Database password */
define( 'DB_PASSWORD', 'pS)m6)7RE7' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5lxfvlnotm95optpidpujivqgvjwr0nx6wauixe2lhntavihackpmtnu6iwm2q6s' );
define( 'SECURE_AUTH_KEY',  'dopwhbkhn2xn7jfv1mgpjl3uvv1ngv1grs1e4j4ap2oyo9epqe2yfgkkjssdcd6q' );
define( 'LOGGED_IN_KEY',    'irvh425kgacwtnegmjqz7ysullip1lzt4a2uw5qoxaoqzptztcrrs7zmobttpn5p' );
define( 'NONCE_KEY',        'feq7oe0xzghasd39thxpvpsu946oclczilyjmewebpsv1ycikaw58xnmxphcmhlt' );
define( 'AUTH_SALT',        'la9oysp7tu18dlfh9okmdcqplgybrrzrourhocnnvsa04vrlj3mwqelhwurrofmp' );
define( 'SECURE_AUTH_SALT', 'qfyzbtvmr0dfe7ctkftlbw2vxxeczpmuhecukrbvklpmbeornhxzquuxmtnf0oxe' );
define( 'LOGGED_IN_SALT',   '2tmpa4vtg9t7r1rakkqfxhnopf4jkmrkimiwwamhe5xgv6mag3uyf7jissfare4r' );
define( 'NONCE_SALT',       'axicqtbfjgghjk5znrurd9wegu6fwcbv18tojcwgoy53lxvfqnzwc28uwl5tmorn' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpql_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
