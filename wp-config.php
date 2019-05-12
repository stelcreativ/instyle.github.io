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
define( 'DB_NAME', 'mystyle' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'N13WV U$l<zNDQ%9HpS|lgM?L.!Ta$`0YegE%e5(y{&r23p=Y+`,p|&PA@8.nc_E' );
define( 'SECURE_AUTH_KEY',  '27vPvs!$ T,{JueBKi@CaO1^i@a1UUj{(0.>-Ym[8O<{I~R3ioVK*}!Z`&+ Hoba' );
define( 'LOGGED_IN_KEY',    'D?c^14GOVAT|84Z]Fs%zhe+-zE&<_*@&E,}z1<~;gMj/X~zk*&%No:a>zn/5*jf7' );
define( 'NONCE_KEY',        'vc=+W$({K6iG+<%:.Y4$+:/6j4u~W$ 9@oS<LLkJl#ixUYN=Z^JU$C@L$G5?pV6D' );
define( 'AUTH_SALT',        'q;;$a8y#eOO?hkYsR}ZQF4A7:Qs)4`5xI[_/2Iz8]J&vB.$;Bkqe-pA5Z;VIt{3z' );
define( 'SECURE_AUTH_SALT', '}IRlsns{yBhfp;625A3i19q1Lr&_98_i3B[j!9Z gutUM2|w=^J0f~f}2+wUKDVK' );
define( 'LOGGED_IN_SALT',   'y*Gp-gjsyWb>XWmo`k|hl0pn,fDyaj,(wtDt~oc2|eljqi|y|_d2OH7PeULsB-l,' );
define( 'NONCE_SALT',       'GXV+S&>_H=p3=Z=]T*_-g$vW+][lsydY`JzAL&HR5[WO}%1bm@s4e>_}3-#`F Z,' );

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
