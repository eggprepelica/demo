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
define( 'DB_NAME', 'xyz_base' );

/** Database username */
define( 'DB_USER', 'fertich' );

/** Database password */
define( 'DB_PASSWORD', 'dbosn73' );

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
define('AUTH_KEY',         '3/N_u2-TC3T=lL99-lFCMr)1(+{=*5|~z$O?mQX9-pW-bEIz?d)k+|8{r*+Y2Ea+');
define('SECURE_AUTH_KEY',  'jo3#L)Dt4HD^NNqUJ=.;d8|,dA()X4siU:PNc:eF(Grvf{a.E-rKy*J|o,{(rB+e');
define('LOGGED_IN_KEY',    'LU05U+2_l/M84)PA9u; `86(6@.TN|I<o51_.DswR~_9Xv*|M?ucnr]z|MKHns|I');
define('NONCE_KEY',        'mQQ?TR1/J<m,ty^l.+]^ZoynBJ~f*Mggu2_(7U+z2]I1WGfQ`HO@c$F%f+Yr|[7M');
define('AUTH_SALT',        '(Z>B?gE5)0FdltW{>5pLo%wECLO/_(0;W:@U*K4G-A|7#-qO:4d^e#a8Fy=}LZ*u');
define('SECURE_AUTH_SALT', 'aAR;%;i<3;d6J-*qizy`imL@~0$$>Rfj.(y;|<9f QfZAof`*1EbQ=ztH{:yx R7');
define('LOGGED_IN_SALT',   'lC`nj/m13!pD.5m{N0{q3 fB)po<E%A];)WsV+;&,{f|VSy*l[|?WDUNkr$l<*Ot');
define('NONCE_SALT',       ',($$g-3a7=2BF/}!x==1&v:{c7=`*dhA:$K&nK(u,(qq!ztTK+w-FfI-=hH>a(OF');

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
