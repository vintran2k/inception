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
define( 'DB_NAME', getenv('WP_DB') );

/** MySQL database username */
define( 'DB_USER', getenv('MARIADB_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MARIADB_USER_PWD') );

/** MySQL hostname */
define( 'DB_HOST', getenv('MARIADB_HOST'));

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'T%:PQ*-(]jLa3KeC3a!+U]RUy6(E/^4k;>X/1:m)Tu9d#F|m,]f`hGID|O,#u*pM');
define('SECURE_AUTH_KEY',  'q+<B$!H!(|w@x$~|5K0y;o*8vY8)jP(?[#<MD]$cYvm6zKO}plc~+qQA e~:T&X7');
define('LOGGED_IN_KEY',    '%, L%3l- ODt;%Y3yL7^,s%@-qFuT+6k:>p0TdXfgBHzW`VZ}/|6/e2By$A#zuox');
define('NONCE_KEY',        'x&qPRetC=.paKhE2|}G8`GjD^fx9>@pRP.p)b6h-y^tYe7+6iMRFPcxtJ&1t8U<C');
define('AUTH_SALT',        'TGW4fWO|ww0*qw+):rqjy&*+F~CzP~xiGw+a5[:Xb!la`(7|kS+)TPP*ji@[<lQ|');
define('SECURE_AUTH_SALT', 'jsEvhL)5k%{HC_9<1U`4lOA~9fIz~D87_|=(}6s:h|-{6|yjw{uH$O=}i8ZP_W~f');
define('LOGGED_IN_SALT',   'K6-T G>X8NTFd=B>3>L3Vuvl+/z.SrjzL)T}eg?-7|OFC0i+[,>[=y65d#s{7Ta}');
define('NONCE_SALT',       '}P>5,dK@s,)=Eo./qRnnUtJV]]~+!p<7(Q&(x( /C7%k]!nU7,-ui379Xkj&/<Q=');
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
