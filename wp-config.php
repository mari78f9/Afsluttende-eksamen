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
define( 'DB_NAME', 'quizeytimes_com' );

/** MySQL database username */
define( 'DB_USER', 'quizeytimes_com' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jeglignerminmor93' );

/** MySQL hostname */
define( 'DB_HOST', 'quizeytimes.com.mysql' );

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
define( 'AUTH_KEY',         '6;U$T41^!wO/NWSZ`pE+Z^|<cFyGAI*{tx&3BbGX_3f@m;MaM0n2K#5:i_B3EttE' );
define( 'SECURE_AUTH_KEY',  'U`L2+$ C>1pprtkL3xq^{cAw!{cJVRT/dV)C,/1:#%??b?IL_4@csQ=|2Fw>MPCx' );
define( 'LOGGED_IN_KEY',    '#Xww~eOPF.=.@ }?s^7dc`*?5hK$yVeOcFE;]rO=R7Sjb(kx1sqO`pHO|x5t+)`5' );
define( 'NONCE_KEY',        'MfHbx+B05z(G=/:_Mw<:-r|R/u}3@pn;5L5}zsci5n]}(M=r@uc6<KBhsF>R;n._' );
define( 'AUTH_SALT',        'oj{*#h$OKMLNRY-p$/#5?oGBwGX%.D`Zh^z6dU^)iK4Bcago|)cgReY?OXMlMPmH' );
define( 'SECURE_AUTH_SALT', 'E&}h@C6J%CS5Xc%l*4h9k61{:Nc/+r?CsOOG8^Cu[g#SH;<sB1j,|XZcD=JC!lmY' );
define( 'LOGGED_IN_SALT',   'aU(wm@`R()z 1G@SE^sv([dYJwo[nca%QlX_i?1`E;p<d=a5|)dEASc}w(r</9XE' );
define( 'NONCE_SALT',       'hGUbwY+EUS8c0z~8U2lljg*2o:2~%0%<:s:){@+.OnmX3iR1!$.(wAA`F5OPr#`!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_LovelyLocks';

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
