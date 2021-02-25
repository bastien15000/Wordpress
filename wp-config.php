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
define( 'DB_NAME', 'boutique_gaec' );

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
define( 'AUTH_KEY',         'Iwt(q}5px}(>^bd0=VXWKeb|InP3h62~9?$);R$U>S7uCbk*1f;PkFcoi:rw)}Rq' );
define( 'SECURE_AUTH_KEY',  'M@l$<Ui46ySOIRP36FhJU4&k|BK10;-.:$&Laic$yx-Lu7{d3a}w<$N9$lB.g/D8' );
define( 'LOGGED_IN_KEY',    '2@9AAWx<O?[(Y-UQmHYeGSH%f2nCI6os+ 4CiZeT%> tLU(3h~pEsmkCD8A`tnJN' );
define( 'NONCE_KEY',        'z;GG~GFoFx<hl+$jGxyb@K7>%Cbj!R<uE/}2H)R8@K,1eB>3B^jPmPRL#c_5)R!@' );
define( 'AUTH_SALT',        '@~{`RtcD-=|`?;s)PU(H;d,cPU3&kRXg#X7Q)E_1<67Iwi0m8:h6*L0ua6exDnP[' );
define( 'SECURE_AUTH_SALT', 'Z-*$cJL/L|Y 1Gn6Wxo&#n{vlQd!~VYPbdb=vM(DEjm.lD[t}#VFw7igSKFW7r-E' );
define( 'LOGGED_IN_SALT',   'D~p9)|*Z_4r,%Fo8-1p!mY$d$3{~(lFRY(l6$X)s|#8WDRkCLMhpkoZDX~RdF6l*' );
define( 'NONCE_SALT',       'lMU1t^X0LvwXJi~l]A7[|Sbf;%fyQId#YRDYJH,MW:U:K(kg&bkrpNv9+MyeN|?`' );

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
