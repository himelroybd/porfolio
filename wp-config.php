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
define( 'DB_NAME', 'github' );

/** Database username */
define( 'DB_USER', 'git' );

/** Database password */
define( 'DB_PASSWORD', '5pSjl*v8@(@-q@.)' );

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
define( 'AUTH_KEY',         'b EiqNpA&Bty::aq=2N!t=qPF6%jdXoe-KiA?f;?h}VgT}8X*:M~YBXZMbR+$tRJ' );
define( 'SECURE_AUTH_KEY',  'YU|K7bc?%d[W/qT9B7:bIq%Giwo]=sm{w6ztn9mF%!0hq&eesA|pH9UA@-c8K[ o' );
define( 'LOGGED_IN_KEY',    '*_?;6%bbU-MLNp,-mfno]g)>1lS`O2R!/S(wM$2,9l_t=O:@*C.n.k]1|v`FWH35' );
define( 'NONCE_KEY',        'XPd]ofjP?id?9&~x}`2xG:Mvo!k9r#!zvXAq[Y8sk@lz,=zjS|BP_lGxb2is;Rw%' );
define( 'AUTH_SALT',        'q 7O|JQ%;y_ QVJ0Zc)Age)S;uZl`33#Rdw3z6{`nkt w)L+}xYU<fudp-,+s@_v' );
define( 'SECURE_AUTH_SALT', ',Fi(JFNf%=c MdZCa2yc[LV2ET]c>0XSYLW0,8Y=-8T=?2e&OR14Ok?GvV*CHY[J' );
define( 'LOGGED_IN_SALT',   't{K B$j@QZX4B8olWc2(L70?C9:6r[$D$g[D `<ujFhU!=uv3N3z5~yQ-Y7ME.:?' );
define( 'NONCE_SALT',       'W++Ne.<af>Z-d<;eel&4*RTm6!1+@33LqvE,%O:,Bwo.8`S=bC`kcre6#m%}$*~z' );

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
