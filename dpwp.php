<?php
define( 'WP_CACHE', true );



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
// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kemahauna_wp' );
/** MySQL database username */
define( 'DB_USER', 'kemahauna_wp' );
/** MySQL database password */
define( 'DB_PASSWORD', 'DpVwQoC9KS0Z' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
//show debug
//define( 'WP_DEBUG', true);
//set time no limit
set_time_limit(0);
/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'S#OJ_{~1_<^pavWb7_l0ZuZ*)l*(O6{$DtQYz9o0YaC0$g)i8g&@}+ja~8H1k]$b' );
define( 'SECURE_AUTH_KEY',  'C_;U^07XYKFr37{rYiVl4nVy@O$W?Qk~1B<fG&amSaf/#K~|{dZT!k+f;,&/<2KV' );
define( 'LOGGED_IN_KEY',    's[UI1%< MplI.ICu-Ay00[Ac-DN#%n:psPtVD3cYaG:ga<v-mjTBn>gXW0N4hEO^' );
define( 'NONCE_KEY',        'S-> YF^|0a8,W)-iSEuNW+,coWa`9;4F=~>/7pg<e>aZHEZr=SHTVa:uNrN1WDyh' );
define( 'AUTH_SALT',        'L6v}K>R`7.LHFx5S9}#cimC:YPcZ0%]0?eKg ]+t;~rjdV33>bY9m6JHeR;7?:Bd' );
define( 'SECURE_AUTH_SALT', 'pf;5Ync}@z_QJ+wewaHJe4pphrT7Ps4a8>>%u{C;4UX:wGrGno>Oq.)<osA,3b|}' );
define( 'LOGGED_IN_SALT',   '*=[`kvv%?m230VlRP=E>Oa`LP`SZ&k4?k0(!.|bQB6b8O-Ir][}`Y5,HOgHI0H<o' );
define( 'NONCE_SALT',       ']iE@r`8z/[~:Rt=kp`yM2%4Bj0X|q3o-|v3PwQcR3Y47}I>*H!q@j)YPjl2~Z9Ks' );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';