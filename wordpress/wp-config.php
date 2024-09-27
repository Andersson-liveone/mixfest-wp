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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mix_fest' );

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
define( 'AUTH_KEY',         'V_`B<o:>$*]w)b5Tf;vHLv/U)yW9HPR%c9qP{&;5tJE#cKnj+Kzkr{^~>@K>L[Wb' );
define( 'SECURE_AUTH_KEY',  '-1q;3_20Jf8r<M4exU4ce|jwnBQ$CpN~ysW,|BUDxWr?LUa?7w$V!lEBUmkRr(M?' );
define( 'LOGGED_IN_KEY',    'YjDyO#x!j1;]si$4}#I)ckKI/LUm d^uZsYsY9;I9Y)G2rl[(t>|ZTh1_$@8(I~s' );
define( 'NONCE_KEY',        'WaY]Z)cEOIpOg2@e5@=6#FeP%9Jm/W:eL]K)UM3jI[3@COV `9+~ktaOFYs8`)6j' );
define( 'AUTH_SALT',        'GHp{sj9S5vixKhWBD$?!Hp//D@IRg8*TQ!YVy3Yn95 S$YLVXr.P`RMvx6R<L<mB' );
define( 'SECURE_AUTH_SALT', '4cP%HJ(|+CGnqL+Gps]9@iwOLUt3cax0;zC]EqWJgE#uY_vrz,G6kyEH<~`QvL&X' );
define( 'LOGGED_IN_SALT',   'LDi:Sr-dhvl#,K94OdjZPpV,s69MrG=H}U G`Rt%H.1K<n@AG6/nbaTEx!n#/,uH' );
define( 'NONCE_SALT',       'WCj2u#/,mw2h1Kp&kWpX0rBpj:!ingAG[ 7!b7-n:-VUL{mm3j$,@:(2{Y.w<2_t' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
