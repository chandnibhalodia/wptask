<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'task2website' );

/** Database username */
define( 'DB_USER', 'pma' );

/** Database password */
define( 'DB_PASSWORD', 'your_password' );

/** Database hostname */
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
define( 'AUTH_KEY',         'wy*lvLeQk@~,d|)xF>l%l1no6L8,ifu$MN:`IfbBo-P7GPahH|Le&P]:k:,G7$WU' );
define( 'SECURE_AUTH_KEY',  ':i`rR^i:3l0kx-lj_gYa*LsUIU2u5?K1`HZ.pvohplRs5[;!O)ZdR;MC$d:7@n4y' );
define( 'LOGGED_IN_KEY',    ']7h#f Z&28dHXG|{$Bm6we$>vNPgJ{7B7ER-lIU4NV#GS:exb1`K)[4MTKZ7YJH?' );
define( 'NONCE_KEY',        'UX}e?}&d#liT1G@Ql+=0rJ_Ry#^$UkEK+^IRwFABAABA1a-bT/eB$?zp{W G?>t&' );
define( 'AUTH_SALT',        '/a]xQw2|8wPH=iOWwlpB=9sqf1;B#+_7AA73iK:<1r2]>3bPVn>M7iX$uOs^5%02' );
define( 'SECURE_AUTH_SALT', 'mOR.:bxpUZJcE+^Sc;$L$3Tg*l)gg*Zpw)RblKfTZ6^Jr7 !NyA)>-U0{)j/;,z$' );
define( 'LOGGED_IN_SALT',   'Gdur&!Pk58*E[SibG5#bw<n{R:;iE`)i:<iRQ:>C:|}a&k`p]!udFkVF7H45^&oV' );
define( 'NONCE_SALT',       'GtfcF<>)&j;:r=P*EmfHe|g/.?B>yM+kb*4Q^oWF=]c0F y wqP_|,KEK3vW!MAL' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
