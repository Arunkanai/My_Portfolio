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
define( 'DB_NAME', 'Portfolio' );

/** Database username */
define( 'DB_USER', 'arun' );

/** Database password */
define( 'DB_PASSWORD', 'EqoYx[)K[L(dUj@z' );

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
define( 'AUTH_KEY',         ';#3JzW(%h=$s|?hS%rU4Y>BR@6-o8*{<0lbJ-WFY.-`w*p{KAmC*UKP_=%5YX2?c' );
define( 'SECURE_AUTH_KEY',  '_FMOUH$+>n,=Uj/Ej6<.zBeczCl.)x/TopWEyrZnp$|<1UF$e7Zz:3K[D=Fwy9+|' );
define( 'LOGGED_IN_KEY',    ';N3U7:4hI^([3r-[<jji{*2p%]-h!Qvx]F:@m5Zl@{| 6dZYrIL.R{1[]zFNXAvE' );
define( 'NONCE_KEY',        '1C~qcYcv_LXEqurD/p{-9)~tuNkzU]ort|zxQLC)KY~.y<n&3w5ufUK3*~nInT0S' );
define( 'AUTH_SALT',        'D92WQQcX *TecH2TDKw$T=200^{F1U9*w~O<Rz/HJ~&~4`;pEC;qB<%z$r]sfP24' );
define( 'SECURE_AUTH_SALT', 'Sy{SHRyOPa /D{0681JmDFmIyFq>Mb:,?_5|]g?%x4Ak`s}:Mnj`shz`4^1wLBd ' );
define( 'LOGGED_IN_SALT',   'hlz9;4},J)M|PKko3x;M3DN>=[^uAB_f1 :%?o6CgNj2g2Yb$Wnkr*jit(,tv~$q' );
define( 'NONCE_SALT',       'mwGkEqWJ,f~AI+j@m>@bXujI3_qZ~*1V(&n_x~z@:_DIqPPH%7X^fzSR}n#`hnY@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pt_';

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
