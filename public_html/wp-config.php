<?php
//Begin Really Simple SSL key
define('RSSSL_KEY', 'mL9ZcA2AvhWAu8mg63Z0JrTy4zes4SjMWW6iEDrSNlIKbNCP4IijUZpRzoP6O6uY');
//END Really Simple SSL key

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
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
define( 'DB_NAME', 'parrilla111_wp741' );

/** Database username */
define( 'DB_USER', 'parrilla111_wp741' );

/** Database password */
define( 'DB_PASSWORD', 'pz(S1I05i-' );

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
define( 'AUTH_KEY',         'pqhfi4dagbuqzpyya4l2opbs3ecpbcqawtj3zyricau9wbhdbjtuvjofwh5fssus' );
define( 'SECURE_AUTH_KEY',  'awgfpxddb1ggrrq302hxsrgbkvsn2iksfovrdykielhjypxw2aanxylmszggsrdp' );
define( 'LOGGED_IN_KEY',    'bewphzwdo5ccr7wzofdk44xxa6luuzoqcbsr610xgrj8aetjmeyzwsoaubdr38lm' );
define( 'NONCE_KEY',        'adq7v2nrbzp4sum8jyihxffoeoedssvscbai7pnro4vwuz98nyy0ucpl71djhbp8' );
define( 'AUTH_SALT',        'zmbq0zyippthysk02lfm0gfgdxwv4fc5kzc6bdi0inxldnflhyr6vnz3kqexrrec' );
define( 'SECURE_AUTH_SALT', 'n6k2dwr7kondmmyo66rflukqflx70ls7ook7fsnh7fwuteosomnqbog3ci1jqz1h' );
define( 'LOGGED_IN_SALT',   '9kkobruywjjy0vk8orwwebfmg43pxdzahzs6d9945auabslcvwm0l2uzkerb7sxq' );
define( 'NONCE_SALT',       'n8au14cythlemax85u1u1bii0u3xphi6cgopqbiizkytwb6een7v27lgcx8dtlld' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpkm_';

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
