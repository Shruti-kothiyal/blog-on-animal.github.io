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
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '<{e>YH6+!|Ua:;iyl:Cgf Zo;f^_DIKE-P}ePZ&KVbD#Uz%qB3RoOX q*U=bGs(Q' );
define( 'SECURE_AUTH_KEY',  ' mq;_ 7;oW9]t6LVAIftC)OA9GupU]r]OXzsOM/7R_w$%qSsvn`D8xkrWx5N?(NO' );
define( 'LOGGED_IN_KEY',    '}em/Vis14eeU} B9#*,>&_yi]<ERx6sant}oLJYBUwsNYEVlTQE1p^d8e0@J0GM@' );
define( 'NONCE_KEY',        '3V=%KGv{x1ZQhdd/nv9#E5R=2ejZ:yFQ^!rwarXRJwkaP-y=X7S&3}cHNy,;.Sw-' );
define( 'AUTH_SALT',        'SV.A_g#G8R~,1&?7mu]#64k4=tH}dXS(y7]A0ca>0v!<=o@WZT>:@K|,o`uEFP],' );
define( 'SECURE_AUTH_SALT', '^h^/~L-@+4 5u:~hHyY2aG`B[o.DK}c+`Lt 4h@(Ci;@6{F(c*t7}eLbTXE{/l%U' );
define( 'LOGGED_IN_SALT',   'qyhy~oE_h24ol&T$xr*k.y#M&g8wiI},9l)/6D(RnW ,|Y.UX#5QmPZCN&oikp`1' );
define( 'NONCE_SALT',       'YO)h0&@)NTtpsTn_2WK4*mDAlH Fwk=$UYR;+. A2i8kD<::scwvu|G6d,Aj5elp' );

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
