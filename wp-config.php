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
define( 'DB_NAME', 'udemy' );

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
define( 'AUTH_KEY',         '1:t ,r76+hRO[y[VQ(<[OAOtIM|{4p5WZ;}ry%;(YBGqcTgzBaJL%X 5]>%:u:_]' );
define( 'SECURE_AUTH_KEY',  '9-q<SR(*u]SAP}8dYzpJ0m$owwV]1FwMNzzZ@26+_E[ElH9E|I#~}|%Zx k4Y`tc' );
define( 'LOGGED_IN_KEY',    'nF&%4!djug1E[vp9/m^ 6u;ME5cqPDU1g=wOTl[aQen!!v),~U4raK|9fd}7.pIA' );
define( 'NONCE_KEY',        'hQ(Jl3$B/v1?}@yHNX=Q/wODD`K01XUf7G=y<!(}E04-rE!7 F.{_f*j[?CoB:=9' );
define( 'AUTH_SALT',        '#.#T@uv&e}pGc,i-s(U8?H2_~9@UiPa04L~7BEv>#*3NLqd1iAd*MVgRP:A?#(ns' );
define( 'SECURE_AUTH_SALT', '4(Y4[/rTN-rdZ]#ei)<N]P{<z/*YJz^D4z~OO4E_K09wp~M2LfYkciG@KXgUtR[@' );
define( 'LOGGED_IN_SALT',   'h{Dncmt&p^I7o0O|xHlM%fwuI-7H{W7l2dSi|4_wg Rdi{hQ^?v<-RmQY&tZI[EF' );
define( 'NONCE_SALT',       'qeY0%D;{LTzsqb@eXD;:bI*e1 U] 9y+oW3BO(btkZ<##Y4|0x[_`E}Ji]>ls{rU' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
