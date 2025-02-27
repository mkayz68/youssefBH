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
define( 'AUTH_KEY',         'Kk+Gi(KvimsJVMsxR9U?(gF,*}U<ChG-35y*S+upThiuv)_:SG=t!:_[Hg$,x2=n' );
define( 'SECURE_AUTH_KEY',  'e:RbkC/4FAeBZ,sU}8Y;oHJwLY.r)M?}yZnS4EXdsiXeUnHvr[&mW_|6O2h/.fOz' );
define( 'LOGGED_IN_KEY',    'KbI{6/AtgY<j^Q%&6)ZzA825HJ_HDrlsVufF&@jK=mf;+<ZX;O7x?Hp:K*RSMXK^' );
define( 'NONCE_KEY',        'dQhMg)9&?Q54S@ZC.2G{JKD_:?sRI <nLvuYACK:9;>`X{}(~4>SVK 1Sobp<5$&' );
define( 'AUTH_SALT',        'Az^Mf=xkSXF8AVs[F^v3J[i:y h/ZK:]|iEE^TY)Et(.-qCDwp;`A9UGRWSfzr~p' );
define( 'SECURE_AUTH_SALT', 'ANPnuLLF:x8U!s:yHhb58T:EthA%RW|bL2+kMb^if5(:4i)iQ5MWn+3C]bOn-?)w' );
define( 'LOGGED_IN_SALT',   '`Wv7C%U!0]<uy<u>zA)GlvH4q^?[ZQ>m7U0{5?rj.>lSO/}oa9s;xkd-]Uu{b*Xs' );
define( 'NONCE_SALT',       '7&B<Iu~7wT)e>2Cr?~IO(>rzw#J?SU5D^AyAh%4)VJ>mIJykp?8h,R27]R&&r#Bx' );

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
