<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'b2025_palmroth' );

/** Database username */
define( 'DB_USER', 'ares' );

/** Database password */
define( 'DB_PASSWORD', 'ovcyh97lSIv4zCQokEVbmifc68gprgK1' );

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
define( 'AUTH_KEY',         'nZ$L(A2FLbgcFY:]o^V:qDFM<Aj5$_v$8])ZzpfD_:K*?`pHQ&2c`>}0](N=?P3#' );
define( 'SECURE_AUTH_KEY',  'f3 myR3HGHIwq-)<6u });Q=X^6rZIH4N4A-P+`O%Ego1Br<z6&Svv:<z{2:xhDy' );
define( 'LOGGED_IN_KEY',    'j32((v-;m=eU4u$/_j0h~i59gKmK!JP*2!}uec*%Pb$W[80$ltEXJ&]u[X;%II,b' );
define( 'NONCE_KEY',        'ElX3Voiw7#cO4-lT;vOaxa@7{toDrj>`$pL s;{9>{{4I={EH:?iJ!On=B6=[qe%' );
define( 'AUTH_SALT',        'D{&Cl2T!64zbU5t2&qMLHxSWB$QNS%k9Z%8/x;)|xH6M-5=bPh .)`!e[hc?mD0}' );
define( 'SECURE_AUTH_SALT', 'me[mOxSSD5au$#8XACrN]NUYWw=;*bhK#0et;IN8Zo&~)ZJ0_/?T1&rpQ0P%8<_B' );
define( 'LOGGED_IN_SALT',   'cuPI}_5.S_%88(UiQrb4<Z{9b9B2M^m=xNCM)ybui^ZCq; 5]Aj$HL#yb>snYB,,' );
define( 'NONCE_SALT',       'n6;@swoe`8?~WwdR=/q6=Y-l3/=l.)42Gpb^`?#T#H:]psN~^3N`NkkK[/m6M:)[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
