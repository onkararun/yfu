<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'yfuusa-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin123');

/** MySQL hostname */
 define('DB_HOST', 'localhost');

// define('DB_HOST', '192.168.1.5');


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
define('AUTH_KEY',         ';Rp8399bW|J+e~2X+t%4CiOg4+BLwFF~p>]L#9eHh]0_<3I%MRAQbQne/Osq=FX ');
define('SECURE_AUTH_KEY',  '2nl^WMCW;dpGR 3Zx,t,m=LKGfDf/S29DLmuJdSfKq8B*{{f:+XquGxErB^FDX&U');
define('LOGGED_IN_KEY',    'je+27fFG4FQm_n8(-`nHj0{,$XoK-@DV+NdQ@0,)>;.<}UZ JyH`u!WB8Vmg:+v^');
define('NONCE_KEY',        '3!r9:8g293boaJQ8nfwirs/:`p s|V}5h=QRr*[U|/o&H!O2Kq(^;- D/W</R0Kv');
define('AUTH_SALT',        '8|B5BGRx3o`{SW1IZ]>rE7/q5.S.m&|&HPZef1}KdhGy-HFXuCF#-Ns$[7_n++w5');
define('SECURE_AUTH_SALT', 'ype5f@D`Wko>$diy8<TX;]xN]Y:81|EKRA;`-`~3_a{05,ra0|%:2]m}-+Feq-r9');
define('LOGGED_IN_SALT',   'ZZ!@:(z#kkykBxVI%AdSze(KSI;^g}^|ZCxwVWR|{PPXf_xF-@:Y-Ua-$#htG-9R');
define('NONCE_SALT',       'E6#7=.!BG(8DmA*P<6wZ7#K{- xRHJb/Z>w+[^SaHM`{SHNS~^a>{BR)TOlY.]W%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('FS_METHOD', 'direct');
