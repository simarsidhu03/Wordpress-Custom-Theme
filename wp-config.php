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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u460293539_newwordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'u460293539_instructor' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '&@9q^^{y=hmta1 V2@r&^/q]JTS-Swn)mY`eKV$M!!+uo7umaA7@k7nu; iE/D)2' );
define( 'SECURE_AUTH_KEY',  'M3CPSfF?*.{@TNawx/C} 0MdFZ3;VFi|FBzyu$e48|^hUp*DK(3L %$I Do2TcEz' );
define( 'LOGGED_IN_KEY',    'xGaC4T6t-[k[5W~N:2aS-DcG-@B0WnS;zBDg8h01)kWJRo/ZDkp}Z_5BD}wJgC!-' );
define( 'NONCE_KEY',        '-p|j.{Wbg7ioLZ,#;H(5.}ys4>-WCc>LcUHa]e2?-y[9?*9qP3?hqYYOpRdiLdRH' );
define( 'AUTH_SALT',        'mX>&Ztb;DE=nsI3VUfY1qMQDnN>AlXK7]Ym,(NiMh9+W9N]Etqy/FYQ,,LyY$0S:' );
define( 'SECURE_AUTH_SALT', '([XcdZSZ.#~M40jjrR<9=V%69uPPV.{O2%rO.{$GawDbVk@IYHJIEnk-xJ7lDgU@' );
define( 'LOGGED_IN_SALT',   '&8J]R{:wXJc^HTvXmu7W!#I)+jr31*hXrx2T=th,9mW*R:A?~8{GPCX`3OIIOLz#' );
define( 'NONCE_SALT',       '$;r!rd=lLPiS]7gvrU-M!#2AB,PgIZGiZSn@FVAJ3Zl[PKJ$R3}tV[fO9I%dunoO' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
