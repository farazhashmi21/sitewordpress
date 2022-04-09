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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'site' );

/** Database username */
define( 'DB_USER', 'developerfarazhashmi' );

/** Database password */
define( 'DB_PASSWORD', 'pJ&%43Qp' );

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
define('AUTH_KEY',         '3D,m_<67JnYTBTlKVh+YlmeG+`|*n~P wOFo1(58oVZAFr`e>U*g_s^e|Pu0sH`p');
define('SECURE_AUTH_KEY',  'oGZL74||GJS-*@d-%fP-/?!{aJNE4Hf~&hwuH(KqODC<.CfN=|r`3%H=n!`QJ_0I');
define('LOGGED_IN_KEY',    'CMbOEm-~~XIu*kKO7?=@3(O7p8]m*xKGV.8fpVA26+&Ky2}X?L1e#-]x;Jr@(L7+');
define('NONCE_KEY',        '&k#C8O/Ci}62%/Y`;EFR4^:{%FWNhn @ -t%q@fo>;t3r{|FyS1{!v~0NQ|~yN=o');
define('AUTH_SALT',        'Q>g;rzt83.tSV3KjI-rj,-k76{:WPS/fw|*nq{-[r0o9xm4FmPHBE|-+P#^|-x2>');
define('SECURE_AUTH_SALT', '?4Z[Y-yFo:ogyqkqx}NaYjmz<:gxiI[x}vz!+cxKUI) T#I~:+:>5h[|CN&-iG,6');
define('LOGGED_IN_SALT',   'c+%j)8/4r[a#PH!%X@3N@>iU[-O=Vx@Lo=(uwwz: }Urv1,9OsW#taEl8Ja]:w-;');
define('NONCE_SALT',       'Z%Gw|-k1i|MsV*<U;`LOQOM-DF5U3]w(M`L}bW8<9xy1C^o4)}<*UwISjoEE;f7v');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_site_';

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
