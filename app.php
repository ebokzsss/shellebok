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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u1672734_imbs2' );

/** MySQL database username */
define( 'DB_USER', 'u1672734_imbs2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Sekeloa.24' );

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
define( 'AUTH_KEY',         'wi0hxjynlapn6epxhqlihqoaq605raoyjkm3ds1hrhjafhq7br4qyutrdk7fldq8' );
define( 'SECURE_AUTH_KEY',  '5qljyyajpndwp1anelfsbbz5ks2bhjmfl6gmgkfeb6ydebvw07huuhczvku02j0f' );
define( 'LOGGED_IN_KEY',    'mxmuxjbgivmr9opbbqkckrizdqhngmqmss5yy2vdwteb0nopdkxzs3jtmboft6am' );
define( 'NONCE_KEY',        'ajdyyemt0huwyxhkwi2inpwpmpoyfgvtmtuwmpreeepfcajpwihsg0akboxbetfh' );
define( 'AUTH_SALT',        'yrbx1c06pmpkiktz6t3rfhqn4p6nfsa62axs4adhxlhevhpslqhoybcpoysy3wkl' );
define( 'SECURE_AUTH_SALT', 'rlfgpiqz16xzeaevnvywlj6u0divlpzxkrnzd09yjdlsvx8hxloqkzkwtwbj1sfb' );
define( 'LOGGED_IN_SALT',   'gcxhpmajiwd5kf15deu4tuypb3wevtsxaxcxjfo5ckbduiejcp8biggpst998ly1' );
define( 'NONCE_SALT',       'wfxevp5llbeniktxjns6dpziypciyrpxrfkjprqg67winzudkdrz0vhf8z91lgg4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpwm_';

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
