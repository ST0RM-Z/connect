<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '8)m_/BlXBko4>ETk7qT3#XmuSwwWe0@nHHhta$lX0x_ajZf]iOEa4Ia>I@E4jq]2' );
define( 'SECURE_AUTH_KEY',  'ki ?Q(M5fOAP- O;0w`*uy8D*Hh4^*(]Hei<}Kg9Y[hkv3m]~]Hdq0>D5dcc?:yq' );
define( 'LOGGED_IN_KEY',    'A<EWE(4hX<Qse~ ]TeGtjqG0Y`V.FlH6D6t1~?7k2%x6DkrZr6E(wyw7q;Ze>??8' );
define( 'NONCE_KEY',        'z6hl5VGl!(-S<[de(&( B[:PL}Q9:-+T4)Bh85j&!`@KML<_3(+0 3(;qG[Ac[?T' );
define( 'AUTH_SALT',        '@3U?vPc<+Smbu(E52 4q,wjHS]K%pn(P/;b9Flw#wfmB|2k)g>c>5n(;SL||JZ[6' );
define( 'SECURE_AUTH_SALT', '6%*Qw&z89HJ[NwKVkv=k>zGfyxjooim?h$z+;s:56;URm,)4Dv^{$OdVUvRE#!26' );
define( 'LOGGED_IN_SALT',   'M8G7% L#HsK*A;G`,rk?S:M Ny#LncPUATIcI;9=BgW!0^U+}xw5GPdRJx)W.t> ' );
define( 'NONCE_SALT',       '<p-u}i$6vyFqsTEr&C5ykelV<mR)uo<25<=EieaHUcK#HT20J0L{^n&pkVtIvP&H' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'FS_METHOD', 'direct' );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
