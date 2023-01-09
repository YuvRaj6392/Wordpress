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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ',qvLdzkwkCgn7oiASb=6EG+m*6$RuO|YKYWi98q>VF`byMO>ojv*tcY u,oS-Kih' );
define( 'SECURE_AUTH_KEY',  'G`r-1yph8Nx(`:PFMtrMRw%[;;M2R)7BDGCXXHU&]OmctY&T#EO?Mv-0(`EQ3}  ' );
define( 'LOGGED_IN_KEY',    'SA?r;hPljFBGu/?YBtj[On94=sz**I&Bk+la<.>V}Py.Ag!&)JcQ-gW|(tQ(I#Fz' );
define( 'NONCE_KEY',        'pg%cF;~daje@:c!>7x#Uwr{PJA9.<]&QxBZ[cBxWiY$`}7`#yiy 8.{|eL;+>r}v' );
define( 'AUTH_SALT',        't|`Yk3|>.On]LnW%(YpjFY7tt`n2NPQng}vN:;<FhA/p8=pOFGR;6npZh%nQ>TXC' );
define( 'SECURE_AUTH_SALT', 'r42|T||IDYzC5B<Ix,rgUFsMfl[I>Kk<a]b{}W*le+lca%X#V=i?Nu{mwH{t[tPe' );
define( 'LOGGED_IN_SALT',   'HE_A[V[$tUr,Pidk%&3|) 7dNi%::s#!3aCna~y|(]Qw2:3ID[ku]u}H|$J9Snl9' );
define( 'NONCE_SALT',       'HaFO<599:?3f7k?,#v|u.k6< &#u +sj/Aq o*Z#|OvUjh &-9WW#9bTE?/VM7_S' );

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
