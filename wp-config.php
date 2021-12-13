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
define( 'DB_NAME', 'restaurant' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '^V%45qM|h7>2EZ#!72/W_J3ykOs8#ivS_m?o}@s{|pHxjL>7^SQ%x. p[X>4iN2~' );
define( 'SECURE_AUTH_KEY',  'Ch8rj0!IkU-*z9,+BxB4{7dRtf.S01n7R&wn5]++g3DYx2uTRc/|WB6^V>;M%.sL' );
define( 'LOGGED_IN_KEY',    't,;8#2RZ%b)mN@)4$KX#oK87}Vf(/_7!AqA#RM5L]k[=[]ojSz}4/VeARzvGrQe,' );
define( 'NONCE_KEY',        'd,TF1ybA1 c0B(U%($;DiS57r#R5tW {? vLhg%UXuWap,22LAd1~=bOvPQX2~[N' );
define( 'AUTH_SALT',        'EV9l>&I UkmI7>h_W^o&QFej]:oWpqIA( w?%utCK:Oc<(EQ,?kOdBRA_Ns*6Sb6' );
define( 'SECURE_AUTH_SALT', '2<q3VxKLGfA0yRPr=Z+I,w8s>TY=$|cg!WJ,9@:txpr&^W1Et!7e/gT6q8Jb3(q.' );
define( 'LOGGED_IN_SALT',   'xJ,LIS;K5PaV^u4C(|g)GvWb 79f1iK>x-PiS~lSjc~MhOyxEA:Tc:$qh^oKi?(&' );
define( 'NONCE_SALT',       '9%;PP^u6WOB;X]TBaX:u6YDPGEyFBhB+0SMn?> KdU}an&YkXLzuKVd^GvD2gSB9' );

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
