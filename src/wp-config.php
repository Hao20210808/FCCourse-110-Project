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
define( 'DB_NAME', 'let\'s_go_to_the_hospital_final_project' );

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
define( 'AUTH_KEY',         '(ET3=7pzPNg*njA>#UZk2Iv=oTUXNH9G2@MD0Bf!s2|SY2<f`mg,3vvl%k{LH)d-' );
define( 'SECURE_AUTH_KEY',  'TW@V,FoMy%Bo:NXc;C=Yk/2]kX!K|<r]+q h=#t9%;uio)n[Cs;+Ns:%anDS`y2i' );
define( 'LOGGED_IN_KEY',    'sGtyj[|0`^Ssl742snwVTz+m!;wrPic>KQyA]HQGSXSED~55uHHghA<fk0z<.M-K' );
define( 'NONCE_KEY',        '!^yKZ:PD<>1CZNd%=Oz}qs<Oo7 a+`}P6VdPU#e07EQ_JK]+78e}(ErJH1su*o?n' );
define( 'AUTH_SALT',        'H/c18*bw. .=T8+T Xj,s5n0XSlmK`mz%[{KjZyi INy.7vB?B91g+-3@^:B7DZ/' );
define( 'SECURE_AUTH_SALT', '9^PKi[Qv?ECxg%;[E)@[A7xKL$]^szQODDIg@ncEGw%S6aH!V]o[QV61U<EH`WAr' );
define( 'LOGGED_IN_SALT',   '~8<?T_=0(Zxljb.A#Pk5ci +mk?uLFfa@c3<?JRtbvpCpEH8rAY-kP/6)>,}E]*#' );
define( 'NONCE_SALT',       '_$yYl2UWn0qrGO{dO` +/mf-+:6lN,pu])]BZ<JargRHm(^j,3>pW9gM`Ucoyrr:' );

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


