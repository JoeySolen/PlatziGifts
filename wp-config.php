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
define( 'DB_NAME', 'skygames' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'Yy6RGHv^E*tG*u8<+Th&i/2*+}w5:^:Zk:-^-c(>KB;AjTQdpr+1-rpk~6pr7(nZ');
define('SECURE_AUTH_KEY',  '[*Wsl-J4ISWvpKEQW%sDO#+Z*UqwEY%k~}.,8qdkfQ-spW|xrX@+R-l;hYt6j3S#');
define('LOGGED_IN_KEY',    '8@|.Cf;qI|C&S)?ol_sFUCdBoL-VPP73.$97 rx1topSu0lkynq+i)kGK1k*.bCZ');
define('NONCE_KEY',        'fpWH9#H&VHhTGCu:,,S>2DZuqki6f}RA;}pw3a%Qw)V7)L!)$^5x]+|4QQ>M}#|h');
define('AUTH_SALT',        ';|ml-|+ZHaIq}*nI[(&cCf3h@ue)! 7CIIgQsJ8#Ps%{~ga7[jfB-FLE?u8QU0$l');
define('SECURE_AUTH_SALT', 'MSh-/,`]<;fKQ?-!?31YC*N(u)~vUCBZ2Ie}5$+P-#QXGCRx~6%t@60uRoti#:k(');
define('LOGGED_IN_SALT',   '-BHN=A^+owc=r~$T`rQADssx}$ICdd]-uxM?+,JSi^y-beBZ0lEWV2!:PwcEbGK+');
define('NONCE_SALT',       'G+Rl_XyjOz(4m&j?X[0:;CSL?U&0NvT_T{+|V/e>{^}kDa05(+I]+qM0(m!=lp7^');

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
