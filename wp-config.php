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
define( 'DB_NAME', 'wnmpwordpress' );

/** Database username */
define( 'DB_USER', 'AdminColin' );

/** Database password */
define( 'DB_PASSWORD', '753951' );

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
define( 'AUTH_KEY',         'SY|lp7Dr=S]/]o =z;u/%3LcfJGg?IJ|,]:Mqb_rIYhr:HI;w|m[3;l{2&I3NxCL' );
define( 'SECURE_AUTH_KEY',  'P{k^ dpe*s`1-23B+lDc>-Tv{k^yr0;OfUC^6C)pM5&vB1[TDUrEr[xW`<,_h~5{' );
define( 'LOGGED_IN_KEY',    'R^X9$lDG:;`|Nq~d5eLQ#WT0*NV_R@7v? F?a;Z{J?M|d>Puu57lJ?H|pym)]Q3p' );
define( 'NONCE_KEY',        '%13vZaTK`hX=t]yh-0L_b-BTk3&CW&tkgP#lpYCzf`+uf9C7ToW/l#ljw/eX4OqP' );
define( 'AUTH_SALT',        'F(Cg`XDBNML_,fRpNsMw|u~Sdy<`Fcr%.FoWFnCpg^eKRbd$Jlv~EeWm+fV:1{S%' );
define( 'SECURE_AUTH_SALT', '|hr9:2c`60n*/;+AN:6tZ;yrFdN}-[cQ+}23Y;[4t->TVjRGWR$6Ys#=^27}*}!)' );
define( 'LOGGED_IN_SALT',   ' k<rB+#F>fl3]S6!=S9u8$~9;7**M[+YaHEx]sBxNa4C/qil9d*?yV/^AaWyw`mw' );
define( 'NONCE_SALT',       '_g]Fw@-V%=+HBF[E^Cv<kj?*9Z:4qn+.gYZ{,bfl26_KwgufRkA&3U[62=|CyOU}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_wnmpwordpress';

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
