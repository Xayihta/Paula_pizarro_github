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
define( 'DB_NAME', 'gaming' );

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
define( 'AUTH_KEY',         'x>}yQf%#UUlMLJ:{fEH@z&:;0-`]rEw>OYOTOPqH$L=5lcIUX#mA!L4oql?,Bj1j' );
define( 'SECURE_AUTH_KEY',  'OVe`{@.?wMVvATt2$cty(0=}pQq7D=@X!18>O]A57AnT7a>ssDoL*7K+CLC2Wa^B' );
define( 'LOGGED_IN_KEY',    'CG^A#&C8WbYZ3X.IBx)&<k,kKv}mEczjU?:+{r(#`6m]4$T5xN[*HB.0(RF(dO7;' );
define( 'NONCE_KEY',        'zoF=?m}#t1}xM0Hiz]$u))G;QUW4K}`[`@21jIKzK1F=kO]Q{B8d&_8bi@*2Wp<w' );
define( 'AUTH_SALT',        'G^F2/M6oIzKZ^V@F^zX2EUe5u9PxY45cZS#AmpM8cXK%)%+ksPNo^d^5iq8>sW^#' );
define( 'SECURE_AUTH_SALT', 'souTJ5hj`ay/;j36tm*jw:qxCwC&}C1g4HV-x?Rt`JPCXZ?/Xg_P}+G Gj|JzXH1' );
define( 'LOGGED_IN_SALT',   '4(5{dwkh?jG%RG15Z>z/&3Xn}L:=)M9aTo~9U&28`[ia5CSE,4_+lC^ CHY G-wO' );
define( 'NONCE_SALT',       's4TL~^}DQyuctFszkr#:c<XJos{t;}WZAgjN4Pb7cv?-X[W2gZ[iwj:WC@^&Ny2s' );

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
