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
define( 'DB_NAME', 'wptheming' );

/** Database username */
define( 'DB_USER', 'wptheming' );

/** Database password */
define( 'DB_PASSWORD', 'wptheming' );

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
define( 'AUTH_KEY',         ' K+%M01ki cXC-uINGEdvz#_v^^tdsFaL8avmk4PYg1*<Bn,[6NcLe81D6_dgQY3' );
define( 'SECURE_AUTH_KEY',  'dEGj$N*+([A=w74&]lo5c)&BA7_Xo4u^zt#i4^e(6v)h@I}D0Q<0DL%-qemXEQa=' );
define( 'LOGGED_IN_KEY',    '89LbaRV,-`|ny8!tC[k. iAqP]B(hn&#x}8?s{He,A+ m7G72k6hu`n RFiI~R>Z' );
define( 'NONCE_KEY',        'o{Dduc^]G<ga?jM2qU-@i`9V#tFyMauL-H,y)VeG4H@63NWVGh:Xuz.~K4#zxp+ ' );
define( 'AUTH_SALT',        '/5@9TNL7jQv.x p_^:e^EZ+AEqY|K&2e!fqzPY?:UGiSZ>d5%Zics$c#)Rl(!}a9' );
define( 'SECURE_AUTH_SALT', '6(OfF:W{UIw/@N;EZe5.Oz0`ka#2Ne)Fgr$2JmASZV8bR.zQVZIbs3OMZ@!Rxjhm' );
define( 'LOGGED_IN_SALT',   ']Yguu_+hnuw9ftTl.8,Ey!D[&W1^e<n)-F.%sZ1u7O: Ze!xPdsbK`VmE{a<MrNW' );
define( 'NONCE_SALT',       '[<W,hHR0f!rV7eWxKn70{MCv)!xu*|aNQEm&h66avIYeT&&NVA737#{%52W[fv;.' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
