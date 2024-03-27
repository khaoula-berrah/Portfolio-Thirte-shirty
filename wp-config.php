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
define( 'DB_NAME', 'berrrgvg_wp989' );

/** Database username */
define( 'DB_USER', 'berrrgvg_wp989' );

/** Database password */
define( 'DB_PASSWORD', '8s-p]2Y-)66X0]Se' );

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
define( 'AUTH_KEY',         'ch8etwfp1xnf2nl8hnexr23oif75tobalimu9oyczqmrx1xb0jcovxnxn6r6jrpw' );
define( 'SECURE_AUTH_KEY',  'mx4e446tct3ocqfkpuordbutoiusnkib9onzqgsxyb9bbdwkinqaq14gozpg6oik' );
define( 'LOGGED_IN_KEY',    'sn9xa3cx1zdojaeh1hzevvlo83dle57znbgnarfd2ie8uw31jebiakrmvbah0dp7' );
define( 'NONCE_KEY',        'qyofzbycecl6okzmsu5pobruf5ydzi1x708lfoy7gqk81cjzrtbvgw6jsa7tihvm' );
define( 'AUTH_SALT',        'ik8wssvogday1jzbdh9i2wuvohuud8axocencexvatfn4ur2a9ej0ixsewmxpaiz' );
define( 'SECURE_AUTH_SALT', 'yreu1gcgoxpuqyx6e1rexhf3wqkp3h89xe3euudlct2d4fgx1phcwei7euxeeazg' );
define( 'LOGGED_IN_SALT',   '987gz4orvifm9daecyqdlqz1wuvxs5tzrshqwvtavh6o1nxpd8fsd3yp8vbrjwi0' );
define( 'NONCE_SALT',       '3gmhbc9g8s2hne37752fyrmiuldeptzmwulxqwk7vusupglcx5au16kmnri8nq84' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wphi_';

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
