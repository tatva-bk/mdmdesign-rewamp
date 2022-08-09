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
define( 'DB_NAME', 'team4_mdmdesign_rewamp' );

/** MySQL database username */
define( 'DB_USER', 'mdmdesign_rewamp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'JbV61uAw7lNnPlYp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'FS_METHOD', 'direct' );



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':mh2jv,H^vXZ@q{7]|.j=9r$+3?_N:X+#[K1lhKbM)T-p|KL4CCUE=oKGtFL}90s');
define('SECURE_AUTH_KEY',  'P<6]-L>x(P!v2p/tlO<L.Lo)~;J/j2vL1++Fi.Mncaw^)m!.4qIB5 zT-zQ+b(B|');
define('LOGGED_IN_KEY',    '}+8&_xL1@Me)%y+|I9,[ZUM#yY%nA%)[xQv-+$VTX?=X-vlQ?UfKT| SuO=7==ua');
define('NONCE_KEY',        'PwP^T#p0R4CHsi1wintPqr8)V$ pbp_i79}7S&C5O$|a-fxTcXkM~$aZq+inX[oW');
define('AUTH_SALT',        '^&wM!|e|&E+TuD+H-et^^usOw:SPWB4(0*DQ4cd-1OX|Kd7wNbd -62-B9+5vJoF');
define('SECURE_AUTH_SALT', 'y?6g&<=:_y9znc`R@M4VzR)f-MEN,]^2%_8(^f<`:4qB{<f3|,T/y6l}{ed]A4Lh');
define('LOGGED_IN_SALT',   'n`|kH_J<Ty,Gc)M`FIs?+k(V;OiUi:>}|g&.IdUH0i1K;$s%Y-DR+-}2!O`LkR]+');
define('NONCE_SALT',       '9c!;W?^SRQ6+H3}p#gN[:6fDN+`n?[!?UL iu})bwHdVv7 VQsEG>=-qiRRjf{P#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mdmdesign_';

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
define('ALLOW_UNFILTERED_UPLOADS', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Disable revisosion */
define('WP_POST_REVISIONS', false);

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
