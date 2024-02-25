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
define( 'DB_NAME', 'gym' );

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
define( 'AUTH_KEY',         'OtK2o.!r]*A^Gif*|jS0+W+B~hWT[wvY8I-j~c+U+O>lx2%)F@RK7AR{dqbxK]Jq' );
define( 'SECURE_AUTH_KEY',  'bG S}OMBHw!.}x+[F#Dm8=Iqv9WSWZ7:^Os7!z|`KtcAh?s]T,&qm.LR6yOJl,r|' );
define( 'LOGGED_IN_KEY',    ',}fi^*B4S9;>hI7uaN|0wKx9Qtkf`MlD/<]u;I&bH_n%I<9[@w5U%u5N3P~AEfn)' );
define( 'NONCE_KEY',        'Hf%1zq/8!KoYCac>DA_*OznTxPAjBTi5^$NrpS]0_T3>rIwvFxXNg2v_ `qrqRm;' );
define( 'AUTH_SALT',        'Z}bHXdO_KP)MmR(WA0iFC%s=I}R6Z)3ENdG1fZdcuc5XIn*ocq$NKKWAUBB,]DIN' );
define( 'SECURE_AUTH_SALT', '{d$!)+axOuIzV6tMs1c]wdMN{;3oiqDk:)*MnApp}eji+UJ!-so:,I+X.kvEby=2' );
define( 'LOGGED_IN_SALT',   'tFmOea%t$mUI,~8vi.63FD45o83qFB}25*;Af^}Xzp%V7sU>?I%GYWclMan_[uB`' );
define( 'NONCE_SALT',       ';Tpk3cfdoHn0UORK 6%=s{,f[KC 0ffeKgr(/sHaJ=vglM7?+f-9<Q.zT?jZ}K!P' );

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
