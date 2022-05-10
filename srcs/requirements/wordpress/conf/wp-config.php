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
define('AUTH_KEY',         'OPZ 5@#XP]-P6}u+lj|:m9<S-j&$dC/$D?OeQc^Pox3$xo:@f/E_wyQFmol5HsXP');
define('SECURE_AUTH_KEY',  'zg<W b7)9R2THL_Lo}NO)gGs|:hk(,t)anNdo!@7V<Fg9etFuJjZN;+dY2mCTp, ');
define('LOGGED_IN_KEY',    '-$7g)Uc]jw_BnGBMgguCkV-;Hs-I}[3Eb<tmQmz~w3Mt>Qji&/aC;.uGR<vTK1=_');
define('NONCE_KEY',        'f}`:UNVQjWU#}u(YbECJI!5c$IX??i{mcwQg=hP;;VZ/@V2b?j{Vj.bczq:}rWp7');
define('AUTH_SALT',        'PHV5<W-~m5-_-n<zS,TGG!S7%-d0[n{8Weg^Lc!mV}tF}KHrasfZ{:zE/zG(QW6*');
define('SECURE_AUTH_SALT', '-e-VPr OO%-l}ms]zSq+,VF 4N?t`pen{Ch8[-c.NbsS^.7g:PZ[RC<Mm^y[R|p}');
define('LOGGED_IN_SALT',   'd%1!c-c%@?C74`guOXC7N}Mok8L_&kf<-b3bO+^,|$N NzNsg.O8T7o:!+1.Udm3');
define('NONCE_SALT',       '`tU3r%9;DN(5-+0l9--C[Hp{{ZiQsXG6%R|C(#f3;7Tmg8V,/j^|gId Sz-|tY-b');
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
