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
define( 'DB_NAME', 'practice-wordpress_db' );

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
define( 'AUTH_KEY',         'R>/>Dz2<{FER1:RV{v!&^/H47:(([7;{8GzWuP}*(s8fnT)Prw1[7ay];e>Jf4t5' );
define( 'SECURE_AUTH_KEY',  'Iln45I4<QbpT7Zk+ec2qU:41*s,|o3@G*F]/|W:UUV1@FTa/E=Oqcw[_<`Om+h26' );
define( 'LOGGED_IN_KEY',    'sTn?y*ua(?fiJvo[YIg%;`rrU&0~&!AvU.0Y|RFZ>fCK2640/NhBpnX4pB+@x=M]' );
define( 'NONCE_KEY',        '~4rLwEN^hJd0wX>bdpG>clUosa#t(j^p` 98z-h9J)3iOs:THXCO]@{.d_1RnX;x' );
define( 'AUTH_SALT',        '!d(=Bct*MlN5(#f8trZ|eW2#`pIlFe6hs>vl~VRJ9JHQDl#+&gY[)$@iD<X+xc;4' );
define( 'SECURE_AUTH_SALT', 'opztPGd=[q$( r{B_{C kFg}j)3n~=@zBP[]U?3K`o?yg./P~;wMS2SX1 w$VpQa' );
define( 'LOGGED_IN_SALT',   'DU++3t./.`NiHUo`m|@o@|jeS7*c*3X6u*;Pw3[gFuXV2;[&*7e2c7lAlS&DD_ !' );
define( 'NONCE_SALT',       '7KUjr-D=Dn/[nP;0a+x[6$Ii.0gjXPXb 3ZX&P^:m{ LxGCv(z>c?$i?3c_cH>8E' );

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
