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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'orbital' );

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
define( 'AUTH_KEY',         'K1;(}2vQ)8M~FQu<66C(.:{/?j6#ZiADX]j}R/u}7e*kgEI7}i5pquZnO*C~*^MS' );
define( 'SECURE_AUTH_KEY',  'q,$8sA/[qEz|jFlgt[22K38,6g=ji}JOq Ba&vC@I*KB3={Nq5U!PO-YnWWCQShS' );
define( 'LOGGED_IN_KEY',    ']7]}B2mY@a1Y/kC:a3os4zp;Y$A#3JJ$p1o,mngTTayzRnnh`01}:ST-~SEQz`da' );
define( 'NONCE_KEY',        '(6 {. Py9hUi=Ot` 26sU<ldr.$Q>9T+Hg_oiXZ*,z1o7@E11A^k{1j_+HiL;&#]' );
define( 'AUTH_SALT',        'cs9y1NEuK,tWn,SO]c8$b<bqri+Nu7]kG3:rm_.x}K,f6,{H)9iVETyoB=G0|5@+' );
define( 'SECURE_AUTH_SALT', '_9G&WQn,gA}9Q+@Yg}G$WjL,_C.%I7,oK)UtIv8Y=g:5~;9];Gc:[nf:s_+GntY)' );
define( 'LOGGED_IN_SALT',   'cnCBWvcL.JN9aXPA?_t3HaK*3FeHP+acpQB6]Q_|&11(dUT.Vph%PymE^ZQcRDe<' );
define( 'NONCE_SALT',       'V!>lA,GMxaqsk[!!7VWQ/uQn^X$aK/jdj^U,g#]~#d9)*}FMA1N}[U+Cj?D2<B@W' );

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
