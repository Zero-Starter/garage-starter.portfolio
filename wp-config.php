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
define( 'DB_NAME', 'garage' );

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
define( 'AUTH_KEY',         ';,BfOo=RB)d4.!rRu%x!K5BKgtez]-S[|kAXU]-_.e{]Jc,ggu0rO?<cP]#,O`t]' );
define( 'SECURE_AUTH_KEY',  'E~CU~!sUZ]4C7y7 IAd~ln6Bm3|$b0{pIZmq33fH1|i*LXaU#kI?:qwjl!@mjD3`' );
define( 'LOGGED_IN_KEY',    '[P^+Z4~z+yqy@:B}s[s)%wv,P:_ TKF}!AK[q(*ZC?$D[?qm~;zTdD7D1,7[@3n^' );
define( 'NONCE_KEY',        'Y,+xq(:w|b+)oPT]K^4W248sa>ll=lJNB46>Hh&piext[S68thLVF;Q8MUK{ID99' );
define( 'AUTH_SALT',        '/fGFFRKN1 4PK ssH5Ay|{,jvGEdUS>OWKTM5(dW,xI^wEXRnPRq2:.94{S,(2I@' );
define( 'SECURE_AUTH_SALT', 'Pfc^[Q,z!!}Yp{~?Yx7|t5y{;kd/bUDsX]?0dk9%2xA;ogWX,s~Gx*j&|oDHqi|S' );
define( 'LOGGED_IN_SALT',   'am-$L#gBpm=K/U*cK/CftCDuJ%pzl=N,X%z 2)Hdrh;>SuxS3Vu0_U{l5*%qyFQ6' );
define( 'NONCE_SALT',       '.bhBO;;Xgu5EyDpad+7&p%j0Htz sSRi|q4iRvvEN; wy2<r@zF_<MqU9;o+DILW' );

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
