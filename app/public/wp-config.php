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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'S[CX<FlNY:Y?R%!/eP?|fJc9oZ=aFVbzuvhNwO_Fl:zQp[Tv]tq.&i/@nYd{Wboj' );
define( 'SECURE_AUTH_KEY',   '//RHW1*8GQ!|Sv8pFuZiPR%l1h%e}H1`4?4ONCV)UMFGO]0)UoEF9vkp%jowt2[p' );
define( 'LOGGED_IN_KEY',     'N{v>D]yHVM8$%Yy/=j1kQ3/6%#L]=&kD{yqpE_%k%d3=qq9fwVsD#mJZ[H[aN%t7' );
define( 'NONCE_KEY',         'Y+o%c@DfAsU=Gau!C68/74/#YqP00Q6[@NF}HFW!ieIsL|x-BU)Fs<crmK A;!MX' );
define( 'AUTH_SALT',         'b18R1$-} XSjKUTPVXz$y*(j#owVl[w^EDT)4>)-}JNpnQQ`ExyG!J$l.8y*EUI+' );
define( 'SECURE_AUTH_SALT',  'H=3@kk<IO8xw/{$vF2Y8g),.NZ64`IJ:|bAV .`IWS7&axj8j@C03tH]tte=F* {' );
define( 'LOGGED_IN_SALT',    '!F.5Clvzc,eVR)(~Z#M1D}G(T`3~w~!{bt9[}iVc<Vw3+/m3xz$S!r%&_GVLWXkq' );
define( 'NONCE_SALT',        '(HO# #k|Rv@AhG2^%[AIAW:_QshfaX#k`F0Gn8m;23{xy;b17zxIMa{_[*6oIc#L' );
define( 'WP_CACHE_KEY_SALT', 'V[*bX3oKThW:F@N jp=IVO!yyLQ8>gS),eTC8[sRQ]nv5R-mc9sTXEK)_ecX|M*H' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
