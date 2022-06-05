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
define( 'DB_NAME', 'hidrolimpiadora2' );

/** Database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         'IuA|8c?aGFZ+IgseMD0A@cHOW4P}ajp${|><_S1j@VHazi#_ETEwCdc@/~vBRzf5' );
define( 'SECURE_AUTH_KEY',  ';8OF>E6T#9EK8s2fLmO<V.aDOm@TOPg=A-[c-7R3(EvXQz*DAK@Z2e5qf~1M?sqk' );
define( 'LOGGED_IN_KEY',    '1PUASA=7!xcW0F</IAU/EFsBcND3u=2*KdU3P6#rOq2j(hqtde#oKS[6L}t;`X*w' );
define( 'NONCE_KEY',        ']n6.-H[Ym2Y8/AlG+}t5CyC]waOOGV K^oTs6{d@nH;J<@NYKoj= |U(Abgj!Z2a' );
define( 'AUTH_SALT',        'k8EtvvFqaNGJaPi)|z31jI<WF`@sPkycu;M:`a1qm]CdyNPR.W:~DR3E`oR1F1(|' );
define( 'SECURE_AUTH_SALT', 'oFNaT09?bK%=DeJhISHi4<;kB#A96!xfW cW&zo&n) UwZLNi6FA6-4)x%0h%_V,' );
define( 'LOGGED_IN_SALT',   ',W0]{ug#Q@f3j5OgH]:Ma$;K;ehAC#>CG8vdEpp&+VXne3_JK_MHjRL%}7qZDKc-' );
define( 'NONCE_SALT',       '2|Ki,kcjSKR|!Z0 I9 >1WjXs$5^$=js-yG`[E<a?THvRn(%ZH}}j*9+n6KMY]05' );

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
