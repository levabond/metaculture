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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u577780814_ladup' );

/** MySQL database username */
define( 'DB_USER', 'u577780814_manew' );

/** MySQL database password */
define( 'DB_PASSWORD', 'PyPaSuQaNu' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5i7!G^|/P-Sq+jz+n+`m~7t^=028p]<T8,U. ;ZzYvs5M~Q{7s)f+>e92vX#^=P]');
define('SECURE_AUTH_KEY',  'l$=m>*bW{oYy>a|IG-SQ%c )r(Y:[It 7b9|2/&/9]G.pY&ZC61#1X5.]*PC+8^!');
define('LOGGED_IN_KEY',    '~Q@w^{aUpIa;NJm2]C~)6x:SO!MdOsQ)B +YqK?uqV7HIyO#h=s|QWTden?X/xO5');
define('NONCE_KEY',        'f-n3$<O{q?%kudUCFrZT={$@aY;FQUQ3WH(xmXF-Fi/^LEq! $P]rtv$-2 4Crgl');
define('AUTH_SALT',        '|H9Am{S;~R+W%j~cyH$WwELS|<UtfH8B;5p&a+5 >]e*G;i+yQj&UJbJ}VmJeKs_');
define('SECURE_AUTH_SALT', '|XOx$!DSBx|x1I=nJ^n9ZGPiY0Baa9K_(eL/FQ5L-v|MNU.y|-(bxT]Xg=4x40pu');
define('LOGGED_IN_SALT',   'hGYaYf5-q{Lb:Oe}l|Zu1%.62F;_GJQt2VJ3Z$@-ZwS-Dd<!4=n--Yv5ZAC;#h4&');
define('NONCE_SALT',       '%#J.*U!{7Yv>G;e,C1]Xv[>bOTsNV:Xx5_=1&FR#&xVS>c-s|-8+BI#S3j1k6(86');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
