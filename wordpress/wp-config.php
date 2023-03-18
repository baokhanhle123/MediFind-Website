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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'y/EC)@H.%b{EbsMMd[^Dv-TQ3o@l%a3nsjaL$ s6j?adE$5yycs.=X8ScoK0GB-5' );
define( 'SECURE_AUTH_KEY',  'g)op8z)QRITlJc7D&grvBe^)yYyV66&+mXaKrBdIb}&;Pu(5B58cHfEXt=rk1nk`' );
define( 'LOGGED_IN_KEY',    'No9q&?4ZTMt|mXbt%3.k $fh#^AcOpF8fKSI+ubbj&~9{AH+`H2Qg7;==SqENI~y' );
define( 'NONCE_KEY',        'YZ@j5GkzHXsDcUNqtHAI}[T+$2m#WVi>(*?Qz].^T%^?$&azNfy4dwyF%LwilKk@' );
define( 'AUTH_SALT',        'yZ:Nx^i!}*Ma_G#XGB2EV|9ePVfJxjrLX]o)vpKYUHr99]iHF)Nsf&]BmaPV1P{8' );
define( 'SECURE_AUTH_SALT', 'f /rC`Tu<oe}R%_ZY_)YbHPe[Ws&;hUP9cU*i(g4S|OOyA#U#)F*+1Wao#Vngwom' );
define( 'LOGGED_IN_SALT',   ')zT[6m;9e5)deUgI=)cT|`qbWgChVB}af6;= nogW?Y6G>Wj<N`sB!qNga #b@S^' );
define( 'NONCE_SALT',       'aZ[kBlAB7#|[jwke&N)+R #XKCx|^LsiPKedOXdz%42?W62xK;p]U%a4_ou+;ZH)' );

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
