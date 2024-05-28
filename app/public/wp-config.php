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
define( 'AUTH_KEY',          '~BtP6j5kyo<}DYAN,b:S<Mml!peBCuOaV.JxM`V]R9ze+x6F&eGe`-`ilZ(&!us;' );
define( 'SECURE_AUTH_KEY',   'k^<~r88H~:9CP;o77Y&P}]JN<hp`{1,J~4o#g-0S+s_`{WJ^?(D&}tR=jFRHjV2Z' );
define( 'LOGGED_IN_KEY',     '8`<e%UG8P/#?5-BZS={?G[%f}AD@~N8ffF|hp)6jwE3 6x3MPdA&+koVOxj)[e<y' );
define( 'NONCE_KEY',         's!IK[`cPA,{J9zJRJG0@.v:Fn0zN2hRs<V{C%yF;%@enX8H}6omai.}$LpRG6M?V' );
define( 'AUTH_SALT',         'v|F^[xDA+W@U2u+3I> vdPZ<p5VuySx[wV7iRtPi0]2~1&CyMQmn=W;W_f_GqiW6' );
define( 'SECURE_AUTH_SALT',  '[{ f1Y^3zEE:;> ?.bT)}U7D||Qs!w_Ye TgpoT#40XS}pIsX~CD91=SZ3_NM1Y0' );
define( 'LOGGED_IN_SALT',    '(=F1[6D-;9U|hJG6bHO[Pi`w8$ZHo.WmwrM9/2n+Xv72i81+RF.p*4]&D>ansAe3' );
define( 'NONCE_SALT',        'YWJ[JS^x7t{CHJ13Q}D/SPc0*Pne0s@<U5gK(8LmP,bsmK^$-_:8W1/RwI}?N/zH' );
define( 'WP_CACHE_KEY_SALT', 'AN2~)_`uRoG%7pBbz6S;/,J[f^JObm7-eGb,)JBL*9gm4c=rWBZS`^=8[c*#2%JO' );


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
