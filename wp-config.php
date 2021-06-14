<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'mysite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|W[Jn-c I~%?gY1|D2{D}A=Ym.rsg]LxstRRHG{v^`U5E!P-}cboja~l&:G.=1]G' );
define( 'SECURE_AUTH_KEY',  'EolasUPjYeoe[{>-QL:9A3bhhGM)L>s;SEF+>jt9|7mm0Nl^R;roQ{!.bBqU0,l+' );
define( 'LOGGED_IN_KEY',    'luVxM&Awc6M|&dE<5%iPGh3>YG=cs8*^5!?Qmy}Eg:s}4 #hkyshluz%gTNR_G>Y' );
define( 'NONCE_KEY',        's*>ROMt)+Q<9y_X:#0J}>RR`,[~!(9d01HUPMkW^*K&fm!,wIkDK}d^fweAcP3n7' );
define( 'AUTH_SALT',        'o6F8to]EX2w,m}6;h~X75XT$y<F*n4j6F:1(e6Cp$MTlM@;_>N6bJF8V{GPcgPF;' );
define( 'SECURE_AUTH_SALT', 'DYi|Q>e>8QGXvh]~$iy;;nQ[I{gzX1DQju7R_G[,O&gOt1j-~_YL/h/4sX)&4N[/' );
define( 'LOGGED_IN_SALT',   ':Y(C2pDvyS5.j^ipp^8f~J:wj$P/<:^ M.-qYII;*0!D]v!LgDoHq!)3k8*z,cgN' );
define( 'NONCE_SALT',       '5B8Vv7l_H5_Q9RHY?0!rRG)q5{|gVSw3!Fxji+urjAm+|7j[4H<Ibl6`V~TW>]8<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
