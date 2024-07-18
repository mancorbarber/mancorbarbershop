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
define( 'DB_NAME', 'mancorbarber' );

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
define( 'AUTH_KEY',         'iO:hN2z<u$Y_mL#5r5cHU&CB%B;/.M%]~D^ovC;Efx]0mP<dt24#[(oO~E*k_-_V' );
define( 'SECURE_AUTH_KEY',  'C2WaOQIbC<`)r#!q$O=Y3d-YJpH(LS88g}^.W`]`$~}Id_Qx11.M~_x%@=p%6D4T' );
define( 'LOGGED_IN_KEY',    ':C|>2o?1}+$:WIZme&3(JpqW*@Z+BY+-$7fw25QLznTb+dz+L|E+gp9,8qifG5f~' );
define( 'NONCE_KEY',        'bF*ksPOecfu7D6k0ieTSQELbg;4A7qEC8zucItdYC;3rer/_0j$nng0sRZeAQm53' );
define( 'AUTH_SALT',        '~Zr|sg+|SS#,W{p}k(KLIj kk4C[`])a~<,A7wW_yG3f)-!]-#ub]8C]Ms|vGdPI' );
define( 'SECURE_AUTH_SALT', ' <.u6UO]4b)^GeDo`OZ7x1x>>p%[d$C[r.hMrz$LrTG$wUj3Ni?a$Qy,Zr8_vy.H' );
define( 'LOGGED_IN_SALT',   '~UdpY]CP9^+Dcaoa9zlsF@K7+<Rv69n}kb7TdbcPJ(3hBRDk,u)941kC_H44xh{5' );
define( 'NONCE_SALT',       'L~UnDG#[ZeZ0HSkKJXr(wl7qMbq_AEoF)zycNMU;Tc,E9FiN /;!B=,N/2vx0Oo/' );

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
