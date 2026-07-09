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
define( 'AUTH_KEY',          'BpZD)ynMO,u.?m<4(,!y)0RzKtl;5~|v;Tv2:z/6O1FDv<g]<y8`]A4JjnCXJ4j|' );
define( 'SECURE_AUTH_KEY',   '$v3v68Ocb&y8Fx3,O!f|jz0TA`pxoH@ft3]-gGpZZ=k/W;fRb||!BK!>{i#d.C/x' );
define( 'LOGGED_IN_KEY',     'ES7)(F}R^EwMetlcR)=koc%0~reIy8ew&ISx$]aS}NSbTd!CT-oV#)bZ%&X-h#Es' );
define( 'NONCE_KEY',         ';}pyZ @{}&iLYC:dT[%Q`+D+Lwp~E&*ikq[mUC&>r~&18Z.}UvnR^m?qJij<;qpR' );
define( 'AUTH_SALT',         'WD`C~PH,%R*@!UD)*wBt7q3,V#(964*{_jLo<)*B:mehfXB`3V5~OvM|Aw;$Ez5Z' );
define( 'SECURE_AUTH_SALT',  'bMOkZ5xtoN4AI#%eh+G/}(&]zvE:8j`%/Xj|#L3!dIHc{1(TZ?;B$q5Tv#)1>R=[' );
define( 'LOGGED_IN_SALT',    '~SJjT4jjxp8BgRotj;#J??==j1?SL/qUzRgW)lyp0Q{NEY5pa?Y:LlgTXskOP!Pm' );
define( 'NONCE_SALT',        'c94DfFFv5ngOgI+Rn;no:~b.u|#xbT;]mx%^<VBUY?#>}.d!mMPwb9|+/F>Z<~Cj' );
define( 'WP_CACHE_KEY_SALT', '=QK^1JC9Wu#q=,j-VaD:9z |ASt]J7=6?]PJ4<K3hW:h/&|r1l!{0I{%7`C:%3cR' );


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
