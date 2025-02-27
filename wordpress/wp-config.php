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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'youssef' );

/** Database password */
define( 'DB_PASSWORD', 'wp_123@Gmail' );

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
define( 'AUTH_KEY',         'xRGpS-VyPC~Lc{)Rg=:4S0Qcd@REoJw_A*XV#2d`NUhc/%j%#G;Rs,a>zioGVr3U' );
define( 'SECURE_AUTH_KEY',  'vv8a8b7KWMIgT_q6ff K2Y<uG78.k?UG]?FBHI7qh}a7.U;%,pPDsf]=C:M!3tow' );
define( 'LOGGED_IN_KEY',    '5&sCSN#jTe_#Q*Ceazd0j%qz 6_/DO`=J]^BEOu)xb&7r80Uv0ArfXC0HEJ.p|SQ' );
define( 'NONCE_KEY',        'p@x_g=,#Q&XU^In^4DpfKCfN6Chcrr8mEXZ6D#o_~z:1@rb~8IZ_W1`:`|T|W6;P' );
define( 'AUTH_SALT',        'SE8m4{>G-d]b7s|dDH(X2hu1);[lF>k vfrV/&zhWyN#`P81w;f6SdYl(Pwe;$$G' );
define( 'SECURE_AUTH_SALT', 'ylfZzdI~ZnDlxD,3HW($9$ZQhMzVR<20eNec.L#[&_9QF0~{C*h~B$P/GD@@((15' );
define( 'LOGGED_IN_SALT',   '3Iij#a~G_nBz.K,;SkqCx%!u:<h8.;Dv6JEc(,Sbs6B7&}dZzVI@=gzQ*Z]j^eYy' );
define( 'NONCE_SALT',       ')$zyBJ~-wi={Y`4{VfE*T=I%2a>a?L~8ASpG1pN>!|[!F(*FO<@wWTGFl]C6R^h5' );

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
