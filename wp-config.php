<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'Alnuweiser' );

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
define( 'AUTH_KEY',         '2%HnGD73t`Tj<Pe!^{K(*8 r2R3J.5NgV$s<JTCc@EO*n-$}U!7(o75!Q)FlgJT;' );
define( 'SECURE_AUTH_KEY',  'D?<BHS%X3TJ-vTE%NIKhgX,Wc02stLjdu>6m]x(/Fi|~IY37)(WN&nr@wiAj^Ed(' );
define( 'LOGGED_IN_KEY',    '<e+~tTH1#Z[tm|.%8SIB-BN@gsp]%6&guty{xaMn P^@D@t2,)Nwk5{cAz<.k:VP' );
define( 'NONCE_KEY',        '(1 MEUKZA,v%^6)usxPds6QNS|XnM1g?CuI2<JcN1E]TU${41]L.AJM7ybwVK{p>' );
define( 'AUTH_SALT',        '0Ck aa&V6wvn1//McsS~Xbm`1,&I{Q `(ha4),P:sEqM1|a6LB~{([+bIjS@?1; ' );
define( 'SECURE_AUTH_SALT', 'nlT$MUX*X {z<Syie VSCm|,h%j{Iq<=hoH-S)3zeJ/sM+?IL[V*|inY7G3{/W6T' );
define( 'LOGGED_IN_SALT',   'g.OC5s?dT2ptBgb3$y(rVOJd4n;}@j4|7X^11Rb]{gR{@Gq7J`!t,8vamKslm@bZ' );
define( 'NONCE_SALT',       ',d%pg*m-fI7eGUEalOi$Gi$IeN46[Tv,[`46l-~K`)m;+}<6!Qd.f?qrH5~rtv=*' );

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
