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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db' );

/** Database username */
define( 'DB_USER', 'db' );

/** Database password */
define( 'DB_PASSWORD', 'db' );

/** Database hostname */
define( 'DB_HOST', 'db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          's>WjLT9c-gEGCEhB])1r9 e$G_)!##7norwhXxz!mZuo8YWb QdmG2?WHBkk%:t^' );
define( 'SECURE_AUTH_KEY',   'm)kdnlE_l:6X,^7mNF.06:U_)IXoIO-e[FDr/1W*v.oSZb$O.B5>Gq.]a/k%>2=1' );
define( 'LOGGED_IN_KEY',     '*N9*](?h)E|rE1eVN7I^Ex]GvR`Ci@`3uVl#e$0+m*WZ_0o{e2_uYy~Nb|*4`IL9' );
define( 'NONCE_KEY',         'p]<7OyK=bdnlW}s<B[}lus*;_PEDH.CpMu`<Th;CEByu]+YN#=1Tr^?_,Iajkrd~' );
define( 'AUTH_SALT',         '%tM`T(nU6mZ@ n lI#D*ek?Byc%;Iwv[0j[%2z:?>g:+_*;&H$HnF2,QBOcOMO}U' );
define( 'SECURE_AUTH_SALT',  't>|SF:#=j8B,.+7jHvj, aP %uHr][eapcs;FERH)6zuvraxBaHO)zzSrG30RAn ' );
define( 'LOGGED_IN_SALT',    '+-s4/R*]VbXk#pMRucq521nuh3uzO~yz/?Baus.zB>w|t!h)K2SOZ%5M@4ba1TfN' );
define( 'NONCE_SALT',        '-@NvP+]$SpLe?gaBXndJ=QtjO;c(YF:B0=#~/[0cjF#2y>J2tm`H |f<UOUbFQOL' );
define( 'WP_CACHE_KEY_SALT', 'Uk~R`[@$A{>])HZKWa/]J 8zp+cQ.EQ?>%8.x;~#+@IlGv_+ZZA1C d0~w1C,R^]' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
