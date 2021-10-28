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
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here');

/** MySQL hostname */
define( 'DB_HOST', 'hostname_here' );

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
define( 'AUTH_KEY',         'aoa[kcW1.ypF2S}hQ3[1Kg!sfanvKp7Q<P=;hJ{vIBT:LUzP,f%H1#aNvXbW_M6S' );
define( 'SECURE_AUTH_KEY',  'KhzE|k6<R2}06)$[y+.@86)w.g#PQm42xau[Ubfy&]]Hxntpqby%?W_54V^Cp.2N' );
define( 'LOGGED_IN_KEY',    'jB#}H }#lNA7`FzE73@1j2}Bm#%J6fc27otRO@OCZ-duaiq.2}zP$6TO7+q?LPj]' );
define( 'NONCE_KEY',        'X`Xn9l+h$X>jS%Kj:&wC6&Vno.VG9>cO44oUi!U^40m*fH/`L~scWM_)se4_.URd' );
define( 'AUTH_SALT',        'cMA*YG9UgH!@k2-K[5Bk%]c+I&Id$7MwjQNYh?yhkx<k/h<64TwR%G|$I[ 8i~.0' );
define( 'SECURE_AUTH_SALT', '%o&ODI/Qdn~Zp2URDfCK7FqH;&?0ob[s#fH$.0#I=<D?{rj{pG>Jm(-,FAG|jO+F' );
define( 'LOGGED_IN_SALT',   '5{gNfkC< r[_c*SgOV~pK/NJTQ9%1=JO;oH-8@J}Za%CkrF 9Muw<CQe(L~IoEv0' );
define( 'NONCE_SALT',       '[)#Hw%-0WM(rl3YA~EKCO$t#8mN@Sl/Rm1Ft5o36L=uBto}*+kZ{=Z-SD8Jwp%5_' );

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
