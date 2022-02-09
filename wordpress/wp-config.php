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
define( 'DB_NAME', 'aupec_test' );

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
define( 'AUTH_KEY',         'EmQxsq+M-8EOeGAYH(@L[rnTGc3x>urK/%XYCq[1XtbsR%8%*k%+yicgN $XTp=u' );
define( 'SECURE_AUTH_KEY',  'a=#/}Brl!YNK3gJgFTb[{@htdKlbG3V(XZT-*t~dTqm-.f:$3&nV^D7WQZlKe8DO' );
define( 'LOGGED_IN_KEY',    '.beSqX_K..|6ZX&_MV*~!5d@Z=Pm;(%|r.Mzo[<bZGR-!$8n)xSesQoW(.*tob5O' );
define( 'NONCE_KEY',        'K3k#?B2@T500{Hc&$gj=v%D-x>xd@MwA 7BNc^iOgq*w^UJ1j58J+C+`.Y9pbK_|' );
define( 'AUTH_SALT',        'f%+r^{yov@!Og0Y[>*e!4hl,7w-3DiRW=TG(9N4QeM(qA [UAswFLFP3bSRmJGaJ' );
define( 'SECURE_AUTH_SALT', '+!PGet*9)T^?f>.)9S;CHSxK4*R+ko%RZ1SDau?h1SRG]w.M|3WoV[,rUHv&^iiT' );
define( 'LOGGED_IN_SALT',   'L(:W8d^L=j]brxy^4FKy|*qGNP%@$65Uj{0=aoi.z6Kz1:z2g;])Lo[;]16p/ZX3' );
define( 'NONCE_SALT',       'RSjEUxG[&.HHF&j7/`4Ag>[A~6@n]CsKJYV_k^6nIov0=NoQZ~E?{B_=_ezh59,V' );

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
