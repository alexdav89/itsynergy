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
define( 'DB_NAME', 'itsynergy' );

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
define( 'AUTH_KEY',         'pPna]wm?]IXfuFZ;S}4bZGAyW+U9*#5O>x>QJUCfyMlb(Q@26~-Q5 ,{m@$ zc/+' );
define( 'SECURE_AUTH_KEY',  'KGKOZ7kP/aMxlgs?L~Qs/lG0FG=8YxO`hWpD|xU)F7qj<4K`X0V B:kRBx6<![%F' );
define( 'LOGGED_IN_KEY',    'rNF.i;#F}EGE,uS*k3;,[be[3E5F9?=27g,ZUu]!JHb6h$wZ$w-Qtx^hhd];~ki<' );
define( 'NONCE_KEY',        'uJl)OARyy(Iy{RS09;8RbY]{HP1rq* ]Ex,|~fMaM]^=bNV4~gK(bXtf7s5*mjBO' );
define( 'AUTH_SALT',        '>I9AVyN]^hQLo^#-ugqcBrsi.kyzN8po}`pX&&bhQ7]QN7R)ru;FqrXIMQWi1(TT' );
define( 'SECURE_AUTH_SALT', '0YG}k$D,`-4.|Ud&.8nU1OI<!/&cxjo)h:Y)b^irH7U+eGi~g;qUWFd#g]D1EF_~' );
define( 'LOGGED_IN_SALT',   'd1r}hMq&Jt66OnT<uC.adlBLeGeTsBL&&PG%W),U1Z~tU,$0lz_B<3R-r5Y?_v!R' );
define( 'NONCE_SALT',       't~28s9dkm<:[,jfRWi{3196f>Io=[z+q-g_KU?C75L,4{Q2QI9G3,yZh|3FLj&}1' );

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
