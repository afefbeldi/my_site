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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'p!1Z;,0-w;c}|kD~qq$z]c<EFIDyN@lD%q<[_/649wRf!lRc@6OYw?H_}^E)SeRk' );
define( 'SECURE_AUTH_KEY',  '.^xXYr>^OTgyn{u?Bb6GMh.g`qD[GUUM;Je&ZA@Q7gNJ9GUqP*+NM&Rv3iP(rs]2' );
define( 'LOGGED_IN_KEY',    'd`k^ppCu!3oR=EFhlXb`WNV0|u4L&DR[blcc.t}^0N3LqDiE{v59NpN%rCb|aS4q' );
define( 'NONCE_KEY',        ')c&FLIp, x4y@`d/~HY J^r4ZleuQ|?m(xgD57x~^kGP$}hqBR(E>i: F$mjez_S' );
define( 'AUTH_SALT',        '_E0!|bsg@C.`3q6M?/o[8fvTY!u%1WTH=6jQS{ U.9eyqdup|/oI):/B*/{KE=Er' );
define( 'SECURE_AUTH_SALT', 'TzW=+~/ce%By!TY*dS=U9ye_(Xg0et7<Xn~>|bEsiI8H6RybvxPxIY|L7-`9fra[' );
define( 'LOGGED_IN_SALT',   '`<-Fs 8&~h|Et<gy r[w$Iyp][u(8-Vm3FbV}WPy%u*haddatuNm0Ui.=/+M<Gbp' );
define( 'NONCE_SALT',       'vm5~tJR2P_jwz{.-b)B>5%.|:`MeKFv |jzut!V9)IA_?=re6pu`ni0wv(a:Uj3f' );

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
define('FS_METHOD','direct');



