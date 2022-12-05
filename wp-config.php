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
define( 'DB_NAME', 'Practice1' );

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
define( 'AUTH_KEY',         't|Pa.[@?)EQ^Sof+x}?:qN[x>99qW?=0W3d^.GgL14?K:`4y$mM^Hu50NX;osYe?' );
define( 'SECURE_AUTH_KEY',  '$n<OevOS$9FFHvCWK7&okMm(:B9g:p]]+l7F{8),bh{AzX#2p&bs3:)?qI4Q=LB+' );
define( 'LOGGED_IN_KEY',    'e.qc!5UqV$vNMnVnOn|(7]8,x(edc@UcDu!`{i`xDA:pUHmQ_wk1{x(d}_M=Vykv' );
define( 'NONCE_KEY',        '_9blRTANzjeG[d9L{X7ER)u2k}kvD}xAa^?;I@T+e2,@nzmtHZgc|dd0i-J.x@k[' );
define( 'AUTH_SALT',        'f7C:N0O;@x^>&q}>i$}t_AtSv-&=r;VBzPk Tq4mf*=UM:>C;`jCS/Q)ZhesrZOF' );
define( 'SECURE_AUTH_SALT', 'R}<TDuqmxrfA&2rEf_w-b-L(}:H)9;,zuJqBNJXDYw:]&)K_J5zWNqs>-l2I a]Y' );
define( 'LOGGED_IN_SALT',   'VGgi^_B/ev[CUt;v7a*4=#6PS1Iw<]J9>|>nWs3Y/?v;A8IX=Lj0%iB,}MkB%Yn.' );
define( 'NONCE_SALT',       '3Hmc)9@%.B^m7[bGR]V)I0p?}2S`A0(g)7S,%fTEpGX^&sd64{--@!a,!)b;4Q|:' );

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
