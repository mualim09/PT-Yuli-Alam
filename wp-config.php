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
define('DB_NAME', 'YuriAlamEksport');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'a6Z-z-(,abE2@([-h)IS.Y + -J1gmPc9<g<mgV +4+~zxP6%/I@/!84,i+/fL7k');
define('SECURE_AUTH_KEY',  '0%CXDqHKf$S6G-W!gd8pm{X{A.j2-OneZp=n,bB_2O.l0~`mK-JCj#($-)>4k`O9');
define('LOGGED_IN_KEY',    '@i5TB+S9sP8I+$s&0LzR-iG[.$7}-HN:S/q|olu7-7s2j+0 Rm|&SkHlhy 7P<bF');
define('NONCE_KEY',        '&H4WR0WP ,JVn&/A`+OT0{gi@(/+WO|M. <aBX8NAsq8K*YZ[,|6qd HtP-YmG=C');
define('AUTH_SALT',        'Du~z2]g&lg|Bv=RQnIeRV6#h=8$(}M.9^{0<;PPw(3E#/u]q]h-pd@Q)j#_6}!4I');
define('SECURE_AUTH_SALT', 'S@5^C]2J+:qA&Osach?R|{lfKd&3.X?pz^l7~/PaDFaRd[-.l9_F$@1o|3(#<F$~');
define('LOGGED_IN_SALT',   'u%irg3Ch/-W#ZFZuT~^V,D:e+XsQRW|*)9>hefF%-Qs= W||u~PbP.HS7mQjR6uu');
define('NONCE_SALT',       'O4p$%6yFY+KF,;Zw@|#M70GwV7+knf5_T,RO^$D%FT|~L&LGvc=Fx9>f/t+)W|Hn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
