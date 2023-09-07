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
define( 'DB_NAME', 'u863620173_KOxcz' );

/** Database username */
define( 'DB_USER', 'u863620173_XLuCV' );

/** Database password */
define( 'DB_PASSWORD', 'e9KaqYV0Em' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'NU@,J*YKE#~c@aEnG!9P3}|vX*U|hjKO~S)Jg.f2b iI@tze<9aKS..Kw2.!jv4:' );
define( 'SECURE_AUTH_KEY',   'driy`AckAJJGYJ1`&l5FN:t[Su`pt;Ox]3HsT~5&rZx>FU7vDn%82hf>k<2aCHJS' );
define( 'LOGGED_IN_KEY',     'P,ctBz~|FuhwLiw7 +t*;)aKF~^|}~KJK8NtI!_%^XL|LgeC&R#=HO@-CjkL%=Z9' );
define( 'NONCE_KEY',         '@Z=,@u;Sx[(hWJ|K7Y4/GXN~cRD`T15JE~;Fa9Hb.s7h<%BBd;uyF[+#[R&6;z#t' );
define( 'AUTH_SALT',         'n{zZBY>)$P:}Uxfyc`3^XpvdpK1!C#mXmmx<8~nE9t3}CPP;>Y~$%lm$l[5^]BMO' );
define( 'SECURE_AUTH_SALT',  'gFkROZ![dH UWQ{`MSRfnAE^Iwn`#$4Xj[?*:LPfWMN4p2K68eT9#j]O6GN0(BgO' );
define( 'LOGGED_IN_SALT',    '8VEbJ<ZA,g*2]X<-5&/<]E%@Hr(d4$LJLbRry)vueh}x-6DQAo<t)N-skpsGKQLg' );
define( 'NONCE_SALT',        'qugLH!kpNB2Beqy}.d9X_?QgY<vjpI,CljdEHv`1iCeC)LRF~WOo;zIlt26GbpnU' );
define( 'WP_CACHE_KEY_SALT', 'w}Cr;mFSc6`:&=A<}[:z9d_CyA2j 2QxqiUV1t6S^5;][Ne*7[B3v#Q&RxJ7{P#u' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
