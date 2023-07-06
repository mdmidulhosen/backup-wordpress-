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
define( 'DB_NAME', 'backup' );

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
define( 'AUTH_KEY',         '^-1SA9baYojjLYV{r1IAW.Vk!|f;6u`VXWLZo^kx GDDN0R9n59hemW![g$;f-XX' );
define( 'SECURE_AUTH_KEY',  'o+0av{{z=&z1BpcFT8hMSMg~n@[/*%}LMOm4?-0:PWAyfq{](D^(9a5;s5:!jgT?' );
define( 'LOGGED_IN_KEY',    'mr1F9%!4ZGbVZ?61;O%g8?-NeT`5Ppx0-*g^7L!m++WeT6WN>*r;0<*rC%XjL%LE' );
define( 'NONCE_KEY',        'tA5a?ujH:TW-.HCvE)VyLvXm#=Ca2^`JA[O<C{jlN_M=L.g=^C#@+;{qjl-bQxy7' );
define( 'AUTH_SALT',        'U(oe757W$P,n0f[_Vaw>)l=R5d98;!$PNR<?i|poIz;5k}D=<<5dDn=b25=V6X=t' );
define( 'SECURE_AUTH_SALT', 'JEcWdUF9_n|312l50hXYnW=LcHls^Y?<X{l1wMX.kQ,,~)(0}.5,q>xt~{YKhHoz' );
define( 'LOGGED_IN_SALT',   'H:VhF0Pz[GrJP~dkPM.3r%Cs?-/*Uwr0ec5R?M?Oc89>1aiHaD2SBc-*ficqD-s%' );
define( 'NONCE_SALT',       'MJh[zhyQoAQjE.Af&}W~?0z>|@7Z/1af3RN%cY:&UIAl0i!K^fh_h&G3EDBQ=Xtx' );

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
