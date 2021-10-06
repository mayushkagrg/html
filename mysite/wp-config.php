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
define( 'DB_NAME', 'database' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '>rz&{]vod@#a)7f%<$lzy3tmFCV4p37Vm:RC6TBBlakK>633f[71(mKg8~<Z-.fy' );
define( 'SECURE_AUTH_KEY',  'd,TRI7vcQs%fTc+T/pF$Kvb4D:Q7AtJ(`#+c2/`B;#([m*npyqEJlVSw[4]n(wWE' );
define( 'LOGGED_IN_KEY',    '0QOO?nF2./@$WI:Y#A`(3K;5j;URj|H<C4|^DNwM0(!]O*}FC[Q[Yt(%=)$2+GMv' );
define( 'NONCE_KEY',        'I{V?.iqGRWU;3pb;py)4-H=#<4`4bpLta/2 nJs8Yhc))|P!0|(Fq90T.Ue@GaOd' );
define( 'AUTH_SALT',        'PXH.|{-UEI>%^PGIDNl:>.|*8QMOLuv3d3/P8t6F.SS!i=Ko7!qd|XFev^SE,!yJ' );
define( 'SECURE_AUTH_SALT', 'B~<hk%J`mss?G99S<:U;S>Ym|NMw}&w)$;[&;H9q-a7T#YiTsq4H%uz4lAj4$}%d' );
define( 'LOGGED_IN_SALT',   '4eW`fil6a%%<C*:&)o:n >9A)9-(TjL  x6wzHjxmMeXjsp7a *(~@`SJZ)_$3g[' );
define( 'NONCE_SALT',       'wswUOqWxzFm^YC3j2NWj,$w5|nztRDJ;YB-oaf PcSr5:+6{l3oj}~7_[.TpJq5$' );

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
