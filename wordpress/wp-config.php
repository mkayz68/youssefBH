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
define( 'AUTH_KEY',         'g(<&VD@KlqX,xSL(M_h+_XE,66Mmj2M4B{@=rF%1t_bt~e%/N|,#x`Yv~TApb8Pn' );
define( 'SECURE_AUTH_KEY',  'Z(5lx3dpTXXgL>6ET^]wXG-8H,nDYc8Otq8OVyDLP`E@/oK9~ma>>>|Zh ;$yAsR' );
define( 'LOGGED_IN_KEY',    'b94*S.uC6ae-/YQLb6s>*^:+Ng?6Y$DC0ZO*yGi/boZT{#Rw.es}M{Pb(zIi&CKi' );
define( 'NONCE_KEY',        '==ubZ?f7]:-JBpUc|:1mYFtTKFRMl&{ROj9cxv=OG{@wUCzD:F|(TAT8)IGQG#$f' );
define( 'AUTH_SALT',        'Da[DE$#](=CnhKYJ0.A}mr}3K}0J~3`0n6~`xSl8h$&rw>dFwOv@f8N:>jr@bMp#' );
define( 'SECURE_AUTH_SALT', 'NYVKsOByCxGci|zeNOM[c=dlrM#DQ;{l_#2QRu-#&N@AQvKMc|`ov{bNy=-aOQka' );
define( 'LOGGED_IN_SALT',   'Lur;)5/VqGraf9!hkH$5Pwa9#*0*^[W7PB&DnQL]|6hrX@_xn(MQ=Y|KRY1TZouV' );
define( 'NONCE_SALT',       '>R!!NL]tbR0`abEV5,4&]>)I9f5#s7q}a8`cK{Hg+u7g@8MmpRn^77C gH`Yrkb{' );

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
