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
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'YU1z)6`#ron]22THdiUd+!CCwF={(9iwk*EhhAL-TO5_GL]z[u.J8,ApG[j^lN.*' );
define( 'SECURE_AUTH_KEY',  'd9s+6p,j;Zi>][zPV2,=T@dM[yKSMERGOQ/L=^cFH}b6u-~o_?/%T{38p4Z!W0[n' );
define( 'LOGGED_IN_KEY',    '9|p-@VhnBbu?,|F&bSM})56`P&Y`[@p*vZV ?b+S~baM`^@XE+ti~X3,}>XFB0vH' );
define( 'NONCE_KEY',        '8*9G(|r?Pp2akdPfYl<o+1H}C:6%VgXh*u4 IH]mk-I_}mfZ$/vKCZexv!a1t:-c' );
define( 'AUTH_SALT',        ']ZsC/,g1B4XU#&^fb^ZOMS8kg_xpDsqZgd Z$giuI}f>F7?k.tw(RlT`et2]dAMT' );
define( 'SECURE_AUTH_SALT', 'p^-ONEjCul{D8@/~P{ZL1Gh8cx,G}vHk=d!%FCm5@=A:ci]Nmn~F4@BBjp/2]+5F' );
define( 'LOGGED_IN_SALT',   'zy``-+j|tcFh_ljTN8-a]{+,+@/(nW;I>xK?Jt90X`!Rr]+5M%={l3Wn~v?E*c$K' );
define( 'NONCE_SALT',       '+4oiMD`oo,SVLxF(Qo[V&{sN[V&;q-_|efQCTgz(>{u+BBhQzQ/NWM*KWNxB?#&E' );

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
