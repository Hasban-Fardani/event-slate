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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'module_cms_hasban_fardani' );

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
define( 'AUTH_KEY',         'r6*lR2,PjpMuiaAdF2>km<|N5RQ0QvUaPSF]g3agGCdp$UZ&mdt+NJn*P]IWs/fc' );
define( 'SECURE_AUTH_KEY',  'iZ7xHZ&^-!#|vf}jeI<u$XgN>>AbCldj%mD/<+;Rsm`*l9:Kk^Fegt>R249/D{am' );
define( 'LOGGED_IN_KEY',    'VeqRv<|AZ}kSR&GIpt/xjD;jVKBmH>P?D!6iR;Ql2<>[ S03b({|LqLj?QSw_I0v' );
define( 'NONCE_KEY',        'rl(8i`epPR0jF)zWY*@O,*z[nv7VL:c528B}%7<OlVGf{[X<VZ9jc^yX1- 9+9o%' );
define( 'AUTH_SALT',        '8BBK(r/<0~GM>rS0f?s$<4^ wa2Pc(3zTU[qnX!QsE2pw8=U,rvjr0DYZ:P;bNR2' );
define( 'SECURE_AUTH_SALT', 'fK5{n<cKO$Rj`-N$IyCg~MzesCh3iYT?/Q+7z,f>p/yfpEY~75da`1m;`=q=T#]t' );
define( 'LOGGED_IN_SALT',   '<QzKvPd$IKc)}Yuzdu&Flt6@%t#C 97&W1::noSvR.X) qM68eP@g~tMtY]UnpOi' );
define( 'NONCE_SALT',       'YereL (k+4GK^f0gK_n@X*GKYC9J(_<IXRf2^~oJ~Cty(Z.X?AUHy$@lq_Mck[:b' );

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
