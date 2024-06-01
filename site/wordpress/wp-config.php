<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'sample' );

/** Database username */
define( 'DB_USER', 'sampleuser' );

/** Database password */
define( 'DB_PASSWORD', 'samplepassword' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         '7ed/14D7r!Q!n~T7Pa4TOFn|p%G2s4RFvAEQt1vWH$GCFtv1kF2`5Yq)*5I-q[5J' );
define( 'SECURE_AUTH_KEY',  'K^fS=@|IvX|f`-#IDI.xjgJhC;Z3b*=U{0%].i5mUSj)`3%_u!V!k9$|a}sWqU2u' );
define( 'LOGGED_IN_KEY',    '&J!nYQ0TTG6+#doYrE;32&4$&t~n%zGJo# K8CY6am_$cPtPh]H&KufM5/Xi/yHF' );
define( 'NONCE_KEY',        'PWZOe{`>xE<@ILo[i<G58;&}za43V+{C678<KUX(}rT9HhS;L`_kc PjQ @DX(U0' );
define( 'AUTH_SALT',        '$S5Zf,2^dlm%))St9wn=Wb.?7qOQ=#364P-SPI9t:+IthVIg[_16$B>($Hw$4@Lo' );
define( 'SECURE_AUTH_SALT', '$90E/K3fI+Esgwj)?q3:i,{8sh7F!Bnv9o~&N|8E@oGlRk%aHpx-v.Oew[ KFscx' );
define( 'LOGGED_IN_SALT',   'c~~Z%!S>piSj4:*8K)mVZU<Fi>U5hU+l9yR.N*;Vk|}Eo~:Y1%16&J2NB~.2{-bO' );
define( 'NONCE_SALT',       '?+(69^(L_|];&UWqb6U$6%UN8q|w/w;R7i?/u+/8[Tf{2gKFlY|6F>5>s!uJmOqM' );

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
