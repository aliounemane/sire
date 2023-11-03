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
define( 'DB_NAME', 'sire_db' );

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
define( 'AUTH_KEY',         'o4,9K|6/x0~}PMa^i$nGD.{}XfsoPVsKk3GO@PkT]F6ga1Zv-FWv-nMNm7RqX@c<' );
define( 'SECURE_AUTH_KEY',  'FH?fw^ .$Wt0jZR#LgJPRiS.D(MM0<pCZ-z)lCp0DnD00Ei$LMd;NOxX,ju<m(wv' );
define( 'LOGGED_IN_KEY',    'f{`,r>Y=mB&;t*{2!Gfw2;p4xip ~t6q&n|Khd iBj aCDEG9JnVUK3G_U2u?MyG' );
define( 'NONCE_KEY',        '<,_K7*+%25~~a`YG$U9(K*1hR}-/^s#R4SNPnb?$</OA HW+9:q?Hw<jJOhv+*.t' );
define( 'AUTH_SALT',        'p%cvayvL@=tc:c7U/hhRndT[b@z.7|0UUOY+rO3::E wa;#3=Won~N7DLmoX>t}~' );
define( 'SECURE_AUTH_SALT', 'F&8A*i#5U%;;d+ceC=gqSdpcXYKV@4{:>:BIHOSKnE@r05E`8)W>!(KYQ23K$YZV' );
define( 'LOGGED_IN_SALT',   '@omD;RamrQ}9Gy%n9r`558?>eEJR@O?Wz&]VF/:=Y#HvM7-zLq~ri)B**F=.JDyd' );
define( 'NONCE_SALT',       'TlS_({n!R<P[Y##4s)Nu=wdh>fU M>t:SfpgjyzfJ.fJ@V=Q]KR$3~#u!7+Q3Qv6' );

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
