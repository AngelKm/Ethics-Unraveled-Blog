<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'D/4qLz2py,/UC[;[RD%_sO2/d!f1/Jz}`TS<DUV4%e=CKV q3]^!-9K4SH0&_Cw!' );
define( 'SECURE_AUTH_KEY',   'LFg2{J>K/GF+K2LuO9,9uW`n|+TQcxTmhY12L+foSrY2;6;#1NFx*mmr(%r?6,Fv' );
define( 'LOGGED_IN_KEY',     'Kd(CTGBpM|Y8{u*pW:I1Nc99]%G1tV-_)_0 UN*!,e|-?:MWx{B_Zrw)A1N>#cSq' );
define( 'NONCE_KEY',         'WqAo?|mvW>$k60>)?UH5FR9U Ja(BQGBX%g@9>7Qa7n_,=XJ[QCTlFYnxLJ~Yz?F' );
define( 'AUTH_SALT',         'TfbHHT|+8@y|4P+ kkY%R#oc$Tz lGzD^4i;#cO7WZmY-XHUW|*QzX^=gy>Cunh8' );
define( 'SECURE_AUTH_SALT',  '7rz,F /8g#c[=462w90IwKBwRqM-^Kl|)h9UO5Q_(cM*Nhm`g}m?EE@f*8J?|Cz~' );
define( 'LOGGED_IN_SALT',    'USe]u@-utc:^E?z?1~z&<gYDYJRoy3xjgT<*>u23=M-T11(oO;0DCV%yomrr.&|l' );
define( 'NONCE_SALT',        'XJ&I)d?Ll,@C0f}LF=,Cf#NW$7U6R{NTwe,:9,%!w]|[m?djlO.0q4ep5mLJg@b;' );
define( 'WP_CACHE_KEY_SALT', 'Cq4r8&<o|)zmqu$yX9!XXBIh?$1]#@.QGn#JR/$pfy`^,iNs[S){-]!+>[`_pu=M' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
