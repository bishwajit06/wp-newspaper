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
define( 'DB_NAME', 'newspaper' );

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
define( 'AUTH_KEY',         'E$vVOQTsdt[~ou(85?!9fGL&%{d=wlSM<YInv*6J@o3%2-y=.-Vziv(^=by$xF9`' );
define( 'SECURE_AUTH_KEY',  'JXl%8L2_@} Z/=n[5XPv,$Qv4xe27%{H#S<@;WB!uFl,)/QT{v= V`D;*@V?QH5$' );
define( 'LOGGED_IN_KEY',    '^b0?>cOn5xR|MYoj# 1]p>[ZaGYVXZW?IOiD1#7Wg-4rXTkSIMiUTpGFzjcFOH()' );
define( 'NONCE_KEY',        '0LhwE@^J,%aO?uaz3&[cCnL=*Q:w1DBgK~viI :3ZjWf 0o7(pB>Z{R:J[=#u~UI' );
define( 'AUTH_SALT',        '#Ia13MABvEE>kODcIxM*!3cIakbQDynfW5n?dT#C5n|*nLPdPlKjAVLZ]bORNg|$' );
define( 'SECURE_AUTH_SALT', '9b%Y7z]*1+WY[6QIy1G-9ll)%_e?fIYEglcD_#U.U*fRXcu?JfJ/D<FQ!*_Gv1Lq' );
define( 'LOGGED_IN_SALT',   '<DQFt/*=:e3^H1YpssZIUx[H,_[?meLcO`lMsn]su_sg/mGnSaht)/W;{6;CQX@{' );
define( 'NONCE_SALT',       'UqX>Y8_y=!~+Gv`{d?1Qn~Lvc9aa~T>)BIeOFog;=4EbG^G+B|5W$<|fQ}Z%,=pY' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
